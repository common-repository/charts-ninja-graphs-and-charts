(function() {
   tinymce.create('tinymce.plugins.chartsninja', {
      init : function(ed, url) {
         ed.addButton('chartsninja', {
            title : 'Chart',
            image : url + '/chartsninja.png',
            onclick : function() {
               var chartID = prompt("Chart ID (from https://charts.commoninja.com)", "");
               if (chartID != null && chartID != '') {
                  ed.execCommand('mceInsertContent', false, '[chartsninja chartid="' + chartID + '"]');
               }
            }
         });
      },
      createControl : function(n, cm) {
         return null;
      },
      getInfo : function() {
         return {
            longname : 'Charts',
            author : 'Common Ninja',
            authorurl : 'https://www.commoninja.com',
            infourl : 'https://charts.commoninja.com',
            version : '1.0'
         };
      }
   });
   tinymce.PluginManager.add('chartsninja', tinymce.plugins.chartsninja);
})();