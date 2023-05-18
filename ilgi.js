const kite_btn = document.getElementById('kite_btn');
const left_btn = document.getElementById('left_btn');
const kite_sonucu = document.getElementById('kite_sonucu');
const left_sonucu = document.getElementById('left_sonucu');


kite_btn.addEventListener('click', function()
{
 fetch('https://openlibrary.org/works/OL5781992W.json').
  then(res => res.json()).
  then(data => {
     console.log('kite-runner');
     var el = document.getElementById("kite-runner");
     el.innerText = data['description']+"\n\n Bu veriler API'den okundu:https://openlibrary.org/works/OL5781992W.json";
   });
});


left_btn.addEventListener('click', function()
{
    fetch('https://openlibrary.org/works/OL4456622W.json').
    then(res => res.json()).
    then(data => {
        console.log('left foot');
        var el = document.getElementById("left-foot");
        el.innerText = data['description']['value'];
        el.innerText += "\n\n Bu veriler API'den okundu:https://openlibrary.org/works/OL4456622W.json";
    });
})

