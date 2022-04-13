var slider = document.getElementById("myRange");
var output = document.getElementById("value");

output.innerHTML = slider.value;
slider.oninput = function(){
    output.innerHTML = this.value;
}

slider.addEventListener("mousemove", function(){
    var value = (this.value - this.min)/(this.max-this.min)*100;
    // var color = 'linear-gradient(90deg, rgb(33, 150, 243)' + x + '%, rgb(33, 150, 243)' + x + '%)';
    // slider.style.background = color;
    this.style.background = 'linear-gradient(to right, #2196F3 ' + value + '%, #fff ' + value + '%)'
    output.innerHTML = this.value;
})  