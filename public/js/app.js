var themes = {
   "default": "//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css",
   "cerulean": "//bootswatch.com/cerulean/bootstrap.min.css",
   "cosmo": "//bootswatch.com/cosmo/bootstrap.min.css",
   "cyborg": "//bootswatch.com/cyborg/bootstrap.min.css",
   "flatly": "//bootswatch.com/flatly/bootstrap.min.css",
   "journal": "//bootswatch.com/journal/bootstrap.min.css",
   "readable": "//bootswatch.com/readable/bootstrap.min.css",
   "simplex": "//bootswatch.com/simplex/bootstrap.min.css",
   "slate": "//bootswatch.com/slate/bootstrap.min.css",
   "spacelab": "//bootswatch.com/spacelab/bootstrap.min.css",
   "united": "//bootswatch.com/united/bootstrap.min.css"
      //etc... add your stylesheet from https://bootswatch.com/
      //example:
      // "ADDNAME": "//bootswatch.com/ADDNAME/bootstrap.min.css"
}

//switches
$(function() {
   var themesheet = $('<link href="' + themes['default'] + '" rel="stylesheet" />');
   themesheet.appendTo('head');
   $('.theme-link').click(function() {
      var themeurl = themes[$(this).attr('data-theme')];
      themesheet.attr('href', themeurl);
   });
});