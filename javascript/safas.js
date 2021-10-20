var searchbar=document.querySelector(".users .search input");
var searchbtn=document.querySelector(".users .search button");
console.log(searchbtn)
console.log(searchbar)

searchbtn.onclick=()=>{
    console.log('hi')
    searchbar.classList.toggle("active");
}