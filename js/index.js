
			yakmaSirasiMi = false;

			function yakSondur(){
				var atraksiyonluYazi = document.getElementById("yanipSonenYazi");

				if(yakmaSirasiMi){
					atraksiyonluYazi.style.color = "#EDEDED";
					yakmaSirasiMi = false;
				}
				else{
					atraksiyonluYazi.style.color = "#ccc";
					yakmaSirasiMi = true;
				}
			}
			window.setInterval("yakSondur()", 500);

			function altCiz(){
				document.getElementById("yanipSonenYazi").style.textDecoration="underline";
			}

			function altCizme(){
				document.getElementById("yanipSonenYazi").style.textDecoration="none";
			}
			
			var descriptionArray = ['some text', 'some more text', 'some even longer text'];
var descriptionLength = descriptionArray.length;
var description = $('#description-rotate');

function loop(i) {
    description.text(descriptionArray[i%descriptionLength]);
    setTimeout(function() {
        loop(i+1);
        description.addClass('rotate-text');
    }, 3050); // This duration must match the length of the animation
}

loop(0);