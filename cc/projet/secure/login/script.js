<script> 
document.addEventListener("DOMContentLoaded", function(event) {
    
    var iconTabs = document.getElementsByClassName('icon-tab'),
        iconTabActive;
    
    for(var i=0;i<iconTabs.length;i++) {if (window.CP.shouldStopExecution(1)){break;}
        (function(iCopy){
            iconTabs[i].addEventListener('click', function(){
            	if(iconTabActive) { classie.toggle(iconTabActive, 'active'); }
                classie.toggle(this, 'active');
                iconTabActive = this;
            });
            setTimeout(function(){
                iconTabs[iCopy].click();
            }, iCopy*350);
        }(i));
    }
window.CP.exitedLoop(1);

});

//# sourceURL=pen.js

document.getElementById("myDIV").style.display = "none";
function myFunction() {
	document.getElementById("myDIV").style.visibility = "visible"
  var x = document.getElementById("myDIV");

  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
	document.getElementById("myDIV").style.visibility = "hidden"
function myFunction() {
	document.getElementById("myDIV").style.visibility = "visible"
  var x = document.getElementById("myDIV");

  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
function jump(h){
    var top = document.getElementById(h).offsetTop;
    window.scrollTo(0, top);
}

function changeIt(img)
{
var name = img.src;

document.getElementById("image").setAttribute("src",name);


}

$(document).ready( function() {
        $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
        });

        $('.btn-file :file').on('fileselect', function(event, label) {
            
            var input = $(this).parents('.input-group').find(':text'),
                log = label;
            
            if( input.length ) {
                input.val(log);
            } else {
                if( log ) alert(log);
            }
        
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $('#img-upload').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function(){
            readURL(this);
        });     
    });
</script>