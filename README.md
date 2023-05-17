![WebMagic](https://github.com/yukihamada/WebMagic/blob/main/public/logo.png?raw=true)

# WebMagic

WebMagic: Text-to-Web System Using LLM 🌐🧙‍♂️

WebMagic is a revolutionary text-to-web system that dynamically generates web pages and systems based on user requirements using LLM. It can not only create UI elements but also interact with databases.

## Example 📖

Creating a Job Recruitment Page for a Prompt Engineer

```php
<?php
PROMPT("
***Job Recruitment Page***
Design requirements:
- Blue menu bar
- White text on the menu bar
- Add a 'Contact' link to the menu, linking to /contact
Content:
- We are looking for a talented Prompt Engineer. Please see below for details.
  - Job Opening: Prompt Engineer
  - Required Skills: Experience in AI, Machine Learning, Deep Learning, and Natural Language Processing.
  - Compensation: Annual salary of 10,000,000 yen
  - Work Arrangement: Remote work possible, side jobs allowed.
");
```

Output

The above PROMPT will generate the following HTML page:

```html
<!DOCTYPE html>
<html>
<head>
    <title>Job Recruitment</title>
    <style>
        .menu {
            background-color: blue;
            color: white;
        }
    </style>
</head>
<body>
    <div class="menu">
        <a href="/contact" style="color: white;">Contact</a>
    </div>
    <div class="content">
        <h1>We are looking for a talented Prompt Engineer.</h1>
        <p>Please see below for details:</p>
        <ul>
            <li>Job Opening: Prompt Engineer</li>
            <li>Required Skills: Experience in AI, Machine Learning, Deep Learning, and Natural Language Processing.</li>
            <li>Compensation: Annual salary of 10,000,000 yen</li>
            <li>Work Arrangement: Remote work possible, side jobs allowed.</li>
        </ul>
    </div>
</body>
</html>
```

## Customize Your System 💻

To design your own system or specify the database you want to use, simply edit the content in the `public/ai/prompt/` directory. The architecture is designed such that one file corresponds to one system, allowing for simplicity and flexibility. Thanks to the use of cache, the system can operate at high speed.

## Setup 🛠

1. Clone the repository.
2. Copy `.env.template` to `.env` and edit as necessary.
3. All PHP execution should go through `router.php`. Edit your `.htaccess` or equivalent to set this up.
4. We recommend using this system on Replit for the best experience.

## Future Plans 🚀

- Add page deletion feature
- Strengthen connection with CockroachDB Cloud
- Introduce automatic translation feature
- Contributions are welcomed

## License 📜

This project is open-source under the MIT license.

## Notice ⚠️

This system is under development and some features have not been implemented yet. It is not intended for use in a production environment, so please be careful when using it.

&nbsp;

***

&nbsp;

# ウェブマジック

WebMagic: テキストからWebシステムを生成するLLMを使用した革新的なシステム 🌐🧙‍♂️

WebMagicは、LLMを使用してユーザーの要件に基づいて動的にWebページやシステムを生成する革新的なテキストからWebシステムです。UI要素を作成するだけでなく、データベースとも対話できます。

## 例 📖

プロンプトエンジニアの求人ページを作成する
```php
<?php
PROMPT("
***求人ページ***
デザイン要件：
- 青いメニューバー
- メニューバーの白いテキスト
- メニューに「お問い合わせ」リンクを追加し、/contactにリンク
コンテンツ：
- 才能あふれるプロンプトエンジニアを募集しています。詳細は以下をご覧ください。
  - 職種：プロンプトエンジニア
  - 必要スキル：AI、機械学習、ディープラーニング、自然言語処理の経験
  - 給与：年俸1,000万円
  - 勤務形態：リモートワーク可、副業可
");
```
上記のPROMPTは、以下のHTMLページを生成します。

```html
<!DOCTYPE html>
<html>
<head>
    <title>求人募集</title>
    <style>
        .menu {
            background-color: blue;
            color: white;
        }
    </style>
</head>
<body>
    <div class="menu">
        <a href="/contact" style="color: white;">お問い合わせ</a>
    </div>
    <div class="content">
        <h1>才能あふれるプロンプトエンジニアを募集しています。</h1>
        <p>詳細は以下をご覧ください：</p>
        <ul>
            <li>職種：プロンプトエンジニア</li>
            <li>必要スキル：AI、機械学習、ディープラーニング、自然言語処理の経験</li>
            <li>給与：年俸1,000万円</li>
            <li>勤務形態：リモートワーク可、副業可</li>
        </ul>
    </div>
</body>
</html>
```

## システムのカスタマイズ 💻

独自のシステムを設計するか、使用するデータベースを指定するには、public/ai/prompt/ディレクトリ内のコンテンツを編集してください。アーキテクチャは、1つのファイルが1つのシステムに対応するように設計されており、シンプルで柔軟性があります。キャッシュの使用により、システムは高速で動作できます。

## セットアップ 🛠

1. リポジトリをクローンします。
2. .env.templateを.envにコピーし、必要に応じて編集します。
3. PHPの実行はすべてrouter.phpを経由するようにしてください。.htaccessやそれに相当するものを編集して設定してください。
4. このシステムはReplitでの使用をお勧めします。

## 今後の計画 🚀

- ページ削除機能の追加
- CockroachDB Cloudとの連携を強化
- 自動翻訳機能の導入
- 貢献は歓迎されます

## ライセンス 📜

このプロジェクトは、MITライセンスの下でオープンソースです。

## 注意 ⚠️

このシステムは開発中であり、一部の機能がまだ実装されていません。本番環境での使用を目的としていないため、使用には注意してください。

&nbsp;

***

&nbsp;

# 网页魔法

WebMagic：使用LLM的文本到Web系统 🌐🧙‍♂️

WebMagic是一种革命性的文本到Web系统，可以根据用户需求使用LLM动态生成网页和系统。它不仅可以创建UI元素，还可以与数据库交互。

## 示例 📖

为Prompt Engineer创建一个招聘页面

```php
<?php
PROMPT("
***招聘页面***
设计要求：
- 蓝色菜单栏
- 菜单栏上的白色文字
- 在菜单中添加一个'联系'链接，链接到/contact
内容：
- 我们正在寻找一位才华横溢的Prompt Engineer。请参阅以下详细信息。
  - 职位空缺：Prompt Engineer
  - 所需技能：具有人工智能、机器学习、深度学习和自然语言处理的经验。
  - 薪酬：年薪1,000万日元
  - 工作安排：可以远程工作，允许兼职。
");
```

输出

上述PROMPT将生成以下HTML页面：

```html
<!DOCTYPE html>
<html>
<head>
    <title>招聘</title>
    <style>
        .menu {
            background-color: blue;
            color: white;
        }
    </style>
</head>
<body>
    <div class="menu">
        <a href="/contact" style="color: white;">联系</a>
    </div>
    <div class="content">
        <h1>我们正在寻找一位才华横溢的Prompt Engineer。</h1>
        <p>请参阅以下详细信息：</p>
        <ul>
            <li>职位空缺：Prompt Engineer</li>
            <li>所需技能：具有人工智能、机器学习、深度学习和自然语言处理的经验。</li>
            <li>薪酬：年薪1,000万日元</li>
            <li>工作安排：可以远程工作，允许兼职。</li>
        </ul>
    </div>
</body>
</html>
```

## 自定义您的系统 💻

要设计您自己的系统或指定要使用的数据库，只需编辑`public/ai/prompt/`目录中的内容。该架构设计为一个文件对应一个系统，简单灵活。由于使用了缓存，系统可以高速运行。

## 设置 🛠

1. 克隆存储库。
2. 将`.env.template`复制到`.env`并根据需要进行编辑。
3. 所有PHP执行都应通过`router.php`进行。编辑您的`.htaccess`或等效文件以进行设置。
4. 我们建议在Replit上使用此系统以获得最佳体验。

## 未来计划 🚀

- 添加页面删除功能
- 加强与CockroachDB Cloud的连接
- 引入自动翻译功能
- 欢迎贡献

## 许可证 📜

该项目在MIT许可证下开源。

## 注意事项 ⚠️

此系统正在开发中，某些功能尚未实现。它不适用于生产环境，请在使用时注意。
