


let loadMoreBtn = document.querySelector('.destinations-section .load-more .btn');
let currentItem = 2;

loadMoreBtn.onclick = () =>{
   let destinations = [...document.querySelectorAll('.destinations-section .destinations .single-destination')];
   for (var i = currentItem; i < currentItem + 2; i++){
    destinations[i].style.display = 'inline-block';
   };
   currentItem += 2;
   if(currentItem >= destinations.length){
      loadMoreBtn.style.display = 'none';
   }
}

