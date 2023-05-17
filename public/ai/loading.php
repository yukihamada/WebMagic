<?php


if(isset($_GET["code"]) && isset($_GET["prompt"]) && isset($_GET["script"])) {
    $_GET["script"] = ltrim($_GET["script"], '/');

    $file = dirname(__FILE__)."/../../cache/AI_".md5($_GET["prompt"]).".cache";
    if (file_exists($file)) {
        $time = date("Ymd_His");
        $ext = pathinfo($_GET["script"], PATHINFO_EXTENSION);
        $name = pathinfo($_GET["script"], PATHINFO_FILENAME);
        $newFilename = "backups/".$name . "_" . $time . "." . $ext;                 
        rename($file, $newFilename);
    }
    $folder_path = dirname($file);

    if (!file_exists($folder_path)) {
      mkdir($folder_path, 0777, true);
    }

    file_put_contents($file, $_GET["code"]);

    $buf = file_get_contents(dirname(__DIR__)."/".$_GET["script"]);

    $buf = preg_replace("/PROMPT\([\"']([\s\S]*?)[\"']\)/is","PROMPT(\"".str_replace('"', '\"', $_GET["prompt"])."\")",$buf);

if(!$buf){
  $buf = "<?php\nPROMPT(\"".str_replace('"', '\"', $_GET["prompt"])."\");";
}
  echo dirname(__DIR__)."/".$_GET["script"];

    echo file_put_contents(dirname(__DIR__)."/".$_GET["script"],$buf);
    exit();
}

if (
    isset($_GET["prompt"]) &&
    isset($_GET["script"])
) {
  $prompt = $_GET["prompt"];

  $file = dirname(__FILE__)."/../../cache/AI_".md5($prompt).".cache";

  if (file_exists($file)) {  
    $buf = file_get_contents($file);
  }

  if (!file_exists($file) || !$buf) {  
    $buf = LIVE($prompt,$_GET["script"]);
  }
  
  header('Content-Type: text/event-stream');
  header('Cache-Control: no-cache');
  header('Connection: keep-alive');
  
  echo "data: ".json_encode(["code"=>$buf])."\n\n";
  echo "data: [DONE]";
  exit();

}

$script = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

if(substr($script,-1)=="/"){
  $script .= "index.php";
}


if(!preg_match("/\.php$/",$script)){
   $script = $script.".php";
}

if(preg_match("/loading\.php$/",$script)){
  echo "Error: Not Found";
  exit();
}


if(isset($_GET["code"]) && isset($_GET["execute"])) {
  echo eval($_GET["code"]);
  exit();
}

  
?><!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Enabler Web Builder</title>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/codemirror.min.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/codemirror.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/mode/xml/xml.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/mode/javascript/javascript.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/mode/css/css.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/mode/htmlmixed/htmlmixed.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/mode/clike/clike.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/mode/php/php.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/mode/sql/sql.min.js"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.1/theme/monokai.min.css" />
</script>

  <style>
body {
  background-color: #2c3e50;
  color: #fff;
}

.CodeMirror {
  border: 1px solid #ccc;
  height: auto;
}
    

select,
button {
  background-color: #34495e;
  color: #fff;
  border: none;
  margin: 20px 10px;
}

select:focus,
button:focus {
  outline: none;
  box-shadow: none;
}

select:hover,
button:hover {
  background-color: #1abc9c;
  cursor: pointer;
}
    
  </style>
</head>

<body ondrop="event.preventDefault(); uploadFile(event.dataTransfer.items[0].getAsFile());" ondragover="event.preventDefault();">
  <div class="container mt-5">
  <h1 class="text-center mb-5">Web Magic</h1>
  <div class="row">
    <div class="col-md-12">

      <h2>Prompt</h2>
      <textarea id="prompt" class="form-control" rows="30"><?php if(isset($prompt)) echo $prompt;?></textarea>

      <button id="generate-code" class="btn btn-primary">コード生成する</button>
      <button id="uploadButton" onclick="document.getElementById('fileInput').click();">画像や動画などのファイルを添付する</button>
    <input type="file" id="fileInput" style="display: none;" onchange="uploadFile(this.files[0]);">
      
      <h2>Code</h2>
      <textarea id="code" class="form-control" rows="20"><?php if(isset($code)) echo $code;?></textarea>

      <h2>Script</h2>
      <input id="script" class="form-control" value="<?php echo $script?>">

<div class="col-md-6 d-flex align-items-end">
  <button id="save" class="btn btn-primary ml-3">コードを保存</button>
  <button id="execute" class="btn btn-primary ml-3">コードを実行</button>
<button type="button" id="check-site-btn" class="btn btn-secondary">サイトを確認する</button>
</div>


<?php
$backup_dir = dirname(__FILE__).'/backups/';
$current_file = basename($script, '.php');

$files = scandir($backup_dir);

foreach ($files as $file) {
    $info = pathinfo($file);
    $filename = basename($file, '.' . $info['extension']);
    if (strpos($filename, $current_file) !== false) {
        // ファイル名の後についた_の後が日付
        $parts = explode('_', $filename);
        $date = $parts[1]."_".$parts[2];

        $url = "/{$current_file}?date=" . urlencode($date);
        echo "<li><a href=\"$url\" target='_blank'>{$date}</a></li>";
    }
}
?>
      
</div>

<script>

class App {
  constructor() {
    this.initEditors();
    this.attachEventListeners();
  }

 attachEventListeners() {
   
  document.getElementById("generate-code").addEventListener("click", () => {
    const script = this.codeMirrorInstances.get("script").getValue();
    const prompt = this.codeMirrorInstances.get("prompt").getValue();
    this.generate(prompt,script);
  });
  document.getElementById("save").addEventListener("click", () => {
    const code = this.codeMirrorInstances.get("code").getValue();
    const prompt = this.codeMirrorInstances.get("prompt").getValue();
    const script = this.codeMirrorInstances.get("script").getValue();
    this.saveCode(code, prompt, script);
  });
  document.getElementById("execute").addEventListener("click", () => {
    const code = this.codeMirrorInstances.get("code").getValue();
    this.executePHP(code);
  });

const checkSiteBtn = document.getElementById("check-site-btn");
checkSiteBtn.addEventListener("click", function() {
  const script = document.getElementById("script").value;
  window.open(script, '_blank');
});

}


  initEditors() {
    const config = {
        lineNumbers: true,
        theme: "monokai",
        lineWrapping: true,
        styleActiveLine: true,
        matchBrackets: true,
        fontFamily: "Source Code Pro, monospace",
        fontSize: "16px"
    };
  
    const textareas = [
        { id: "prompt", mode: "markdown" },
        { id: "script", mode: "markdown" },
        { id: "code", mode: "php" }
    ];
  
    this.codeMirrorInstances = new Map();
  
    textareas.forEach(({ id, mode }) => {
        const editor = CodeMirror.fromTextArea(document.getElementById(id), {
            ...config,
            mode
        });
  
        this.codeMirrorInstances.set(id, editor);
  
    });
  }

generate(prompt,script) {
  const currentCodeInstance = this.codeMirrorInstances.get("code");
  currentCodeInstance.setValue("👨‍💻🛠️🔄");
    document.getElementById("generate-code").disabled = true;

    document.getElementById("generate-code").value = "Code Genarating ...";
    // this.generate(prompt,script);
    // document.getElementById("generate-code").value = "Genarate Code";
    // document.getElementById("generate-code").disabled = false;

  if (!prompt) {
    alert("⚠️💬");
    return;
  }

  let buf = '';
  const url = `/ai/loading.php?prompt=${encodeURIComponent(prompt)}&script=${encodeURIComponent(script)}`;

  let eventSource = new EventSource(url);
  
  // Display errors if there are any during generation
  eventSource.onerror = () => {
//    alert("⚠️🤖💬❌");
//    eventSource.close();
  }

  eventSource.onmessage = (e) => {
    const data = e.data;
      try {

        const currentCodeInstance = this.codeMirrorInstances.get("code");
        
        if(JSON.parse(data).code){
          alert('キャッシュファイルが読み出されました。変更したい場合はプロンプトを変更するかキャッシュファイルを削除してください。');
          currentCodeInstance.setValue(JSON.parse(data).code);
          eventSource.close();
          return;
        }

        const parsedData = JSON.parse(data);
        const response = parsedData.choices[0];

        if(response.delta.content){
          buf += response.delta.content;
        }

        if (currentCodeInstance) {
          currentCodeInstance.setValue(removeStartAndEnd(buf));
        }

        
        
      } catch (error) {}
    if (data === "[DONE]") {
      eventSource.close();
      document.getElementById("generate-code").disabled = false;
      return;
    }
  }  
  
  function removeStartAndEnd(text) {
    const startString = "```php\n";
    const endString = "```";
    let result = text;
  
    if (result.startsWith(startString)) {
      result = result.slice(startString.length);
    }
  
    if (result.endsWith(endString)) {
      result = result.slice(0, -endString.length);
    }
  
    return result;
  }
    
  
}  


saveCode(code, prompt,script) {
  if (!code || !prompt) {
    alert("Error: prompt or code missing");
    return;
  }

  const url = `/ai/loading.php?code=${encodeURIComponent(code)}&prompt=${encodeURIComponent(prompt)}&script=${encodeURIComponent(script)}`;
  
  fetch(url)
    .then(response => {
    if (response.ok) {
      alert("コードが保存されました");
    } else {
      throw new Error("Failed to save code");
      }
    })
    .catch(error => {
      alert("Error: " + error.message);
    });
  }


  executePHP(code) {
  if (!code || !prompt) {
    alert("Error: prompt or code missing");
    return;
  }

  const url = `/ai/loading.php?code=${encodeURIComponent(code)}&execute=true`;
  
  fetch(url)
    .then(response => {
    if (response.ok) {
      alert("コードが実行されました"+response.text());
    } else {
      throw new Error("Failed to Execute code");
      }
    })
    .catch(error => {
      alert("Error: " + error.message);
    });
  }

}
const app = new App();

const uploadFile = file => {
    let formData = new FormData();
    formData.append('file', file);
    fetch('/ai/upload.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        let textArea = document.getElementById('prompt');

        const currentCodeInstance = app.codeMirrorInstances.get("prompt");
        currentCodeInstance.setValue(currentCodeInstance.getValue() + "\n" + data);
    })
    .catch(console.error);
}
  
</script>
</body>
</html>