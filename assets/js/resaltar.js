jQuery(document).ready(function(){
          jQuery("#idfiltro").jcOnPageFilter({animateHideNShow: true,
                    focusOnLoad:true,
                    highlightColor:'#78AFBD',
                    textColorForHighlights:'#000000',
                    caseSensitive:false,
                    hideNegatives:true,
                    parentLookupClass:'jcorgFilterTextParent',
                    childBlockClass:'jcorgFilterTextChild'}
          );
       });          