-- MySQL dump 10.13  Distrib 5.6.25, for osx10.10 (x86_64)
--
-- Host: localhost    Database: yajie
-- ------------------------------------------------------
-- Server version	5.6.25

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2015_06_21_174427_create_posts_table',1),(3,'2015_06_27_074414_create_tags_table',1),(4,'2015_06_27_074433_create_post_tag_pivot',1),(5,'2016_08_08_231059_create_post_tag_table',1),(6,'2016_08_08_234447_drop_post_tag_pivot_table',1),(7,'2016_08_28_195321_add_linkedin_column_to_users_table',1),(8,'2016_08_29_082858_add_cv_column_to_users_table',1),(9,'2016_09_02_231259_create_password_resets_table',1),(10,'2016_09_07_091203_create_settings_table',1),(11,'2016_09_22_165717_update_page_image_paths',1),(12,'2016_11_07_144904_update_posts_table_to_include_author_id',1),(13,'2016_11_08_072246_create_roles_table',1),(14,'2016_11_08_080456_add_roles_column_to_users_table',1),(15,'2016_11_14_070030_drop_roles_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_tag`
--

DROP TABLE IF EXISTS `post_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_tag` (
  `post_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`post_id`,`tag_id`),
  KEY `post_tag_tag_id_foreign` (`tag_id`),
  CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_tag`
--

LOCK TABLES `post_tag` WRITE;
/*!40000 ALTER TABLE `post_tag` DISABLE KEYS */;
INSERT INTO `post_tag` VALUES (1,1,'2016-11-19 00:24:52','2016-11-19 00:24:52');
/*!40000 ALTER TABLE `post_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content_raw` text COLLATE utf8_unicode_ci NOT NULL,
  `content_html` text COLLATE utf8_unicode_ci NOT NULL,
  `page_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_draft` tinyint(1) NOT NULL DEFAULT '0',
  `layout` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'frontend.blog.post',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `published_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`),
  KEY `posts_published_at_index` (`published_at`),
  KEY `posts_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,1,'hello-world','Hello World','Canvas is a simple, powerful blog publishing platform that lets you to share your stories with the world. Its beautifully designed interface allows you to create and publish your own blog, giving you tools that make it easy and even fun to do.','Welcome to Canvas! I\'m your first post demonstrating Markdown integration. Don\'t delete me, I\'m very helpful! If you do delete me though, I can be recovered. Just grab me from:\r\n\r\n```language-markup\r\nresources/views/shared/helpers/welcome.blade.php\r\n```\r\n\r\n<div class=\"section-divider\"></div>\r\n\r\n## The Basics\r\n---\r\n\r\nBefore I tell you about all the extra syntaxes and capabilities you have available to you, I\'ll introduce you to the basics of standard markdown. If you already know markdown, and want to jump straight to learning about the fancier things I can do, feel free to skip this section. Lets jump right in!\r\n\r\nMarkdown is a plain text formatting syntax created by John Gruber, aiming to provide a easy-to-read and feasible markup. The original Markdown syntax specification can be found [here](http://daringfireball.net/projects/markdown/syntax).\r\n\r\n<div class=\"section-divider\"></div>\r\n\r\n## Typography\r\n---\r\n\r\n# Heading 1\r\n## Heading 2\r\n### Heading 3\r\n#### Heading 4\r\n##### Heading 5\r\n###### Heading 6\r\n\r\nJust put angle brackets around an email and it becomes clickable: <user@example.com> `<user@example.com>`\r\n\r\nSame thing with urls: <http://example.com> `<http://example.com>`\r\n\r\nPerhaps you want to some link text like this: [Example Website](http://example.com \"Title\")\r\n`[Example Website](http://example.com \"Title\")` (The title is optional)\r\n\r\nMake [a link][arbitrary_id] `[a link][arbitrary_id]` then on it\'s own line anywhere else in the file:\r\n`[arbitrary_id]: http://example.com \"Title\"`\r\n\r\nIf the link text itself would make a good id, you can link [like this][] `[like this][]`, then on it\'s own line anywhere else in the file:\r\n`[like this]: http://example.com`\r\n\r\n[arbitrary_id]: http://example.com \"Title\"\r\n[like this]: http://example.com\r\n\r\nOption name         | Markup           | Result\r\n--------------------|------------------|-------------------------\r\nIntra-word emphasis | `Intra-word em\\*pha\\*sis`   | Intra-word em<em>pha</em>sis\r\nStrikethrough       | `\\~~Strikethrough\\~~`   | <del>Strikethrough</del>\r\nUnderline  | `\\_Underline\\_`      | <u>Underline</u>\r\nQuote      | `\\\"Quote\\\"`  | <q>Quote</q>\r\nHighlight           | `\\==Highlight\\==`    | <mark>Highlight</mark>\r\nSuperscript         | `Some\\^(superscript)`     | Some<sup>superscript</sup>\r\nItalics            | `**Italics**`      | <em>Italics</em>\r\nBold | `*Bold text*`   | <strong>Bold text</strong>\r\nHTML Entities | ``©`` ``ƒ`` ``™`` ``®`` | © ƒ ™ ®\r\n\r\n<div class=\"section-divider\"></div>\r\n\r\n## Tables\r\n---\r\n\r\n##### **Markup**:\r\n```language-markup\r\nKey | Value\r\n--- | ---\r\nSSH Host | `example.com`\r\nSSH User | `username`\r\nSSH Password | `secret`\r\nDatabase Host | `127.0.0.1`\r\nDatabase User | `username`\r\nDatabase Password | `secret`\r\n```\r\n\r\n<div class=\"section-divider\"></div>\r\n\r\n##### **Result**:\r\nKey                 | Value\r\n------------------- | ---\r\nSSH Host            | `example.com`\r\nSSH User            | `username`\r\nSSH Password        | `secret`\r\nDatabase Host       | `127.0.0.1`\r\nDatabase User       | `username`\r\nDatabase Password   | `secret`\r\n\r\n<div class=\"section-divider\"></div>\r\n\r\n## Code Blocks\r\n---\r\n\r\n`Inline code` is indicated by surrounding it with backticks:\r\n`` `Inline code` ``\r\n\r\nIf your ``code has `backticks` `` that need to be displayed, you can use double backticks:\r\n```` ``Code with `backticks` `` ````  (mind the spaces preceding the final set of backticks)\r\n\r\nGitHub\'s fenced code blocks are supported in Canvas:\r\n\r\n```php\r\nnamespace App;\r\n\r\nclass Blog extends Canvas\r\n{\r\n\r\n    /**\r\n    * Dreaming of something more?\r\n    *\r\n    * @with  Canvas\r\n    */\r\n    public function create()\r\n    {\r\n        // Make something awesome...\r\n    }\r\n}\r\n```\r\n\r\nYou can also use waves (`~`) instead of back ticks (`` ` ``):\r\n\r\n~~~php\r\nprint(\'Hello world!\')\r\n~~~\r\n\r\n<div class=\"section-divider\"></div>\r\n\r\n## Lists\r\n---\r\n\r\n##### **Markup**:\r\n```language-markup\r\n* Lists must be preceded by a blank line (or block element)\r\n* Unordered lists start each item with a `*`\r\n- `-` Works too\r\n* Indent a level to make a nested list\r\n1. Ordered lists are supported.\r\n2. Start each item (number-period-space) like `1.`\r\n42. It doesn\'t matter what number you use, it will render sequentially\r\n```\r\n\r\n<div class=\"section-divider\"></div>\r\n\r\n##### **Result**:\r\n* Lists must be preceded by a blank line (or block element)\r\n* Unordered lists start each item with a `*`\r\n- `-` Works too\r\n* Indent a level to make a nested list\r\n1. Ordered lists are supported.\r\n2. Start each item (number-period-space) like `1`\r\n3. It doesn\'t matter what number you use, it will render sequentially\r\n\r\n<div class=\"section-divider\"></div>\r\n\r\n## Block Quotes\r\n---\r\n\r\n##### **Markup**:\r\n```language-markup\r\n> Angle brackets `>` are used for block quotes.\r\nTechnically not every line needs to start with a `>` as long as\r\nthere are no empty lines between paragraphs.\r\n> Looks kinda ugly though.\r\n> > Block quotes can be nested.\r\n> > > Multiple Levels\r\n>\r\n> Most markdown syntaxes work inside block quotes.\r\n```\r\n\r\n<div class=\"section-divider\"></div>\r\n\r\n##### **Result**:\r\n> Angle brackets `>` are used for block quotes.\r\nTechnically not every line needs to start with a `>` as long as\r\nthere are no empty lines between paragraphs.\r\n> Looks kinda ugly though.\r\n> > Block quotes can be nested.\r\n> > > Multiple Levels\r\n>\r\n> Most markdown syntaxes work inside block quotes.\r\n\r\n<div class=\"section-divider\"></div>\r\n\r\n## Horizontal Rules\r\n---\r\n\r\nIf you type three asterisks `***`, you will get a horizontal rule. Three dashes `---` will make the same rule.\r\n\r\n<div class=\"section-divider\"></div>\r\n\r\n## Task List Syntax\r\n---\r\n\r\n1. [x] Support for rendering checkbox list syntax\r\n    * [x] Support for nesting\r\n    * [x] Support for ordered *and* unordered lists\r\n2. [ ] No support for clicking checkboxes directly in the HTML window\r\n\r\n<div class=\"section-divider\"></div>\r\n\r\n## Markdown Extra\r\n---\r\n\r\nCanvas supports **Markdown Extra**, which extends traditional **Markdown** syntax with some nice features. If you need some help or just want a refresher, read more about [Markdown syntax](https://daringfireball.net/projects/markdown/syntax) and [Markdown Extra](https://michelf.ca/projects/php-markdown/extra/).\r\n\r\n<div class=\"section-divider\"></div>\r\n\r\n## Hack On\r\n---\r\n\r\nThat’s about it. The best way to be proficient in anything is to know what tools you have available to you. You\'re one step ahead of the game now. Happy coding!','<p>Welcome to Canvas! I\'m your first post demonstrating Markdown integration. Don\'t delete me, I\'m very helpful! If you do delete me though, I can be recovered. Just grab me from:</p>\n<pre><code class=\"language-language-markup\">resources/views/shared/helpers/welcome.blade.php</code></pre>\n<div class=\"section-divider\"></div>\n<h2>The Basics</h2>\n<hr />\n<p>Before I tell you about all the extra syntaxes and capabilities you have available to you, I\'ll introduce you to the basics of standard markdown. If you already know markdown, and want to jump straight to learning about the fancier things I can do, feel free to skip this section. Lets jump right in!</p>\n<p>Markdown is a plain text formatting syntax created by John Gruber, aiming to provide a easy-to-read and feasible markup. The original Markdown syntax specification can be found <a href=\"http://daringfireball.net/projects/markdown/syntax\">here</a>.</p>\n<div class=\"section-divider\"></div>\n<h2>Typography</h2>\n<hr />\n<h1>Heading 1</h1>\n<h2>Heading 2</h2>\n<h3>Heading 3</h3>\n<h4>Heading 4</h4>\n<h5>Heading 5</h5>\n<h6>Heading 6</h6>\n<p>Just put angle brackets around an email and it becomes clickable: <a href=\"mailto:user@example.com\">user@example.com</a> <code>&lt;user@example.com&gt;</code></p>\n<p>Same thing with urls: <a href=\"http://example.com\">http://example.com</a> <code>&lt;http://example.com&gt;</code></p>\n<p>Perhaps you want to some link text like this: <a href=\"http://example.com\" title=\"Title\">Example Website</a>\n<code>[Example Website](http://example.com \"Title\")</code> (The title is optional)</p>\n<p>Make <a href=\"http://example.com\" title=\"Title\">a link</a> <code>[a link][arbitrary_id]</code> then on it\'s own line anywhere else in the file:\n<code>[arbitrary_id]: http://example.com \"Title\"</code></p>\n<p>If the link text itself would make a good id, you can link <a href=\"http://example.com\">like this</a> <code>[like this][]</code>, then on it\'s own line anywhere else in the file:\n<code>[like this]: http://example.com</code></p>\n<table>\n<thead>\n<tr>\n<th>Option name</th>\n<th>Markup</th>\n<th>Result</th>\n</tr>\n</thead>\n<tbody>\n<tr>\n<td>Intra-word emphasis</td>\n<td><code>Intra-word em\\*pha\\*sis</code></td>\n<td>Intra-word em<em>pha</em>sis</td>\n</tr>\n<tr>\n<td>Strikethrough</td>\n<td><code>\\~~Strikethrough\\~~</code></td>\n<td><del>Strikethrough</del></td>\n</tr>\n<tr>\n<td>Underline</td>\n<td><code>\\_Underline\\_</code></td>\n<td><u>Underline</u></td>\n</tr>\n<tr>\n<td>Quote</td>\n<td><code>\\\"Quote\\\"</code></td>\n<td><q>Quote</q></td>\n</tr>\n<tr>\n<td>Highlight</td>\n<td><code>\\==Highlight\\==</code></td>\n<td><mark>Highlight</mark></td>\n</tr>\n<tr>\n<td>Superscript</td>\n<td><code>Some\\^(superscript)</code></td>\n<td>Some<sup>superscript</sup></td>\n</tr>\n<tr>\n<td>Italics</td>\n<td><code>**Italics**</code></td>\n<td><em>Italics</em></td>\n</tr>\n<tr>\n<td>Bold</td>\n<td><code>*Bold text*</code></td>\n<td><strong>Bold text</strong></td>\n</tr>\n<tr>\n<td>HTML Entities</td>\n<td><code>©</code> <code>ƒ</code> <code>™</code> <code>®</code></td>\n<td>© ƒ ™ ®</td>\n</tr>\n</tbody>\n</table>\n<div class=\"section-divider\"></div>\n<h2>Tables</h2>\n<hr />\n<h5><strong>Markup</strong>:</h5>\n<pre><code class=\"language-language-markup\">Key | Value\n--- | ---\nSSH Host | `example.com`\nSSH User | `username`\nSSH Password | `secret`\nDatabase Host | `127.0.0.1`\nDatabase User | `username`\nDatabase Password | `secret`</code></pre>\n<div class=\"section-divider\"></div>\n<h5><strong>Result</strong>:</h5>\n<table>\n<thead>\n<tr>\n<th>Key</th>\n<th>Value</th>\n</tr>\n</thead>\n<tbody>\n<tr>\n<td>SSH Host</td>\n<td><code>example.com</code></td>\n</tr>\n<tr>\n<td>SSH User</td>\n<td><code>username</code></td>\n</tr>\n<tr>\n<td>SSH Password</td>\n<td><code>secret</code></td>\n</tr>\n<tr>\n<td>Database Host</td>\n<td><code>127.0.0.1</code></td>\n</tr>\n<tr>\n<td>Database User</td>\n<td><code>username</code></td>\n</tr>\n<tr>\n<td>Database Password</td>\n<td><code>secret</code></td>\n</tr>\n</tbody>\n</table>\n<div class=\"section-divider\"></div>\n<h2>Code Blocks</h2>\n<hr />\n<p><code>Inline code</code> is indicated by surrounding it with backticks:\n<code>`Inline code`</code></p>\n<p>If your <code>code has `backticks`</code> that need to be displayed, you can use double backticks:\n<code>``Code with `backticks` ``</code>  (mind the spaces preceding the final set of backticks)</p>\n<p>GitHub\'s fenced code blocks are supported in Canvas:</p>\n<pre><code class=\"language-php\">namespace App;\n\nclass Blog extends Canvas\n{\n\n    /**\n    * Dreaming of something more?\n    *\n    * @with  Canvas\n    */\n    public function create()\n    {\n        // Make something awesome...\n    }\n}</code></pre>\n<p>You can also use waves (<code>~</code>) instead of back ticks (<code>`</code>):</p>\n<pre><code class=\"language-php\">print(\'Hello world!\')</code></pre>\n<div class=\"section-divider\"></div>\n<h2>Lists</h2>\n<hr />\n<h5><strong>Markup</strong>:</h5>\n<pre><code class=\"language-language-markup\">* Lists must be preceded by a blank line (or block element)\n* Unordered lists start each item with a `*`\n- `-` Works too\n* Indent a level to make a nested list\n1. Ordered lists are supported.\n2. Start each item (number-period-space) like `1.`\n42. It doesn\'t matter what number you use, it will render sequentially</code></pre>\n<div class=\"section-divider\"></div>\n<h5><strong>Result</strong>:</h5>\n<ul>\n<li>Lists must be preceded by a blank line (or block element)</li>\n<li>Unordered lists start each item with a <code>*</code></li>\n<li><code>-</code> Works too</li>\n<li>Indent a level to make a nested list\n<ol>\n<li>Ordered lists are supported.</li>\n<li>Start each item (number-period-space) like <code>1</code></li>\n<li>It doesn\'t matter what number you use, it will render sequentially</li>\n</ol></li>\n</ul>\n<div class=\"section-divider\"></div>\n<h2>Block Quotes</h2>\n<hr />\n<h5><strong>Markup</strong>:</h5>\n<pre><code class=\"language-language-markup\">&gt; Angle brackets `&gt;` are used for block quotes.\nTechnically not every line needs to start with a `&gt;` as long as\nthere are no empty lines between paragraphs.\n&gt; Looks kinda ugly though.\n&gt; &gt; Block quotes can be nested.\n&gt; &gt; &gt; Multiple Levels\n&gt;\n&gt; Most markdown syntaxes work inside block quotes.</code></pre>\n<div class=\"section-divider\"></div>\n<h5><strong>Result</strong>:</h5>\n<blockquote>\n<p>Angle brackets <code>&gt;</code> are used for block quotes.\nTechnically not every line needs to start with a <code>&gt;</code> as long as\nthere are no empty lines between paragraphs.\nLooks kinda ugly though.</p>\n<blockquote>\n<p>Block quotes can be nested.</p>\n<blockquote>\n<p>Multiple Levels</p>\n</blockquote>\n</blockquote>\n<p>Most markdown syntaxes work inside block quotes.</p>\n</blockquote>\n<div class=\"section-divider\"></div>\n<h2>Horizontal Rules</h2>\n<hr />\n<p>If you type three asterisks <code>***</code>, you will get a horizontal rule. Three dashes <code>---</code> will make the same rule.</p>\n<div class=\"section-divider\"></div>\n<h2>Task List Syntax</h2>\n<hr />\n<ol>\n<li>[x] Support for rendering checkbox list syntax\n<ul>\n<li>[x] Support for nesting</li>\n<li>[x] Support for ordered <em>and</em> unordered lists</li>\n</ul></li>\n<li>[ ] No support for clicking checkboxes directly in the HTML window</li>\n</ol>\n<div class=\"section-divider\"></div>\n<h2>Markdown Extra</h2>\n<hr />\n<p>Canvas supports <strong>Markdown Extra</strong>, which extends traditional <strong>Markdown</strong> syntax with some nice features. If you need some help or just want a refresher, read more about <a href=\"https://daringfireball.net/projects/markdown/syntax\">Markdown syntax</a> and <a href=\"https://michelf.ca/projects/php-markdown/extra/\">Markdown Extra</a>.</p>\n<div class=\"section-divider\"></div>\n<h2>Hack On</h2>\n<hr />\n<p>That’s about it. The best way to be proficient in anything is to know what tools you have available to you. You\'re one step ahead of the game now. Happy coding!</p>','/assets/images/mocha.jpg','Let\'s get you up and running with Canvas!',0,'frontend.blog.post','2016-11-19 00:24:52','2016-11-20 03:56:28','2016-11-19 00:24:52');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `setting_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `setting_value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `settings_setting_name_index` (`setting_name`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'blog_author','chen yajie'),(2,'blog_title','yajie blog title'),(3,'blog_subtitle','yajie blog subtitle'),(4,'blog_description','yajie blog description'),(5,'blog_seo','yajie'),(6,'disqus_name',NULL),(7,'ga_id',NULL),(8,'twitter_card_type','none'),(9,'canvas_version','v2.1.15'),(10,'latest_release','v2.1.15');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `layout` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'frontend.blog.index',
  `reverse_direction` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tags_tag_unique` (`tag`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'Getting Started','Getting Started','Getting started with Canvas','Meta content for this tag.','frontend.blog.index',0,'2016-11-19 00:24:52','2016-11-19 00:24:52');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `github` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resume_cv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci,
  `job` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(140) COLLATE utf8_unicode_ci DEFAULT NULL,
  `relationship` varchar(140) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` varchar(140) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_id_index` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'chen','yajie','chen yajie',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'yajie@yajie.com','$2y$10$T6yPefMaHEK2dXXLHkWN9.iytXgnru5SXBWbnmB1nhC3mGlMa0KNq','xnY6KKs1K4YTmjrTHVC1lkoZ9bCJT9e9Kl6stOrKXLzMM6Fe5kozkLbPtojO','2016-11-19 14:28:29','2016-11-19 02:37:22');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-21 22:41:03
