# Barhop
Barhop is a lightweight theme designed for Anchor CMS. Page templates are in minimal PHP and focus on the writing, not the extra stuff. Some features include:

- Markdown and HTML editing in Anchor
- Fully mobile-responsive design
- Featured image included in blog list (see below for setup)
- jPanelMenu.js drawer menu
- Permalink and Twitter share button on each post
- Post descriptions displayed on home page
- Comment permalinks
- Category article counts in the sidebar

See a [live demo](http://dev.brianbennett.org/anchor)

Currently, the Barhop theme is only available for Anchor. I'm planning on porting it over to Wordpress if I can get around to it.

##Setup

There are a few customizations you'll need to make in order to take advantage of the features.

#### Featured Images
Barhop uses featured images to give a clean, modern look to your blog, but it must be enabled by the user. To do so:

1. Create a new Custom Field under **Extend > Custom Fields** in your admin settings
2. Enter the following in the form:
   - Type: **post**
   - Field: **text**
   - Unique Key: **featured-image** (this is the slug used by Anchor)
   - Label: **Featured Image**
3. Click **Update**
4. To set a featured image in the post editor:
   - Scroll to the bottom of the editor
   - Paste an image source URL into the Featured Image field.
   - Images can be static *or* animated GIFs.

### Twitter
Anchor CMS is so light because it comes completely unconfigured.

Set up a reusable username variable:

1. Create a new Custom Field under **Extend > Site Variables** in the admin settings.
2. Enter the following in the config form:
   - Name: **twitter_account**
   - Value: **yourusername** - do **not** include '@'!

## In the works...
Anchor is a work in progress, currently on version 0.9. I'm working on building out tagging of posts in addition to categories, sticky posts, permalinks for comments, and searchable pages.

## Credits

This theme is built for [Anchor CMS](http://www.anchorcms.com) and uses the [jPanelMenu](http://jpanelmenu.com) library.

## License

Barhop is created by Brian Bennett (2014) is licensed with [The MIT License](http://opensource.org/licenses/MIT) and is free to use, modify and distribute.