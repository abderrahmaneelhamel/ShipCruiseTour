<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="script.js">
    <link rel="stylesheet" href="style.css">
  <style>
    body{
    background-color: black;
}
.movies{
    width: 100%;
    display: flex;
    flex-wrap: wrap;
}
.movies li {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    list-style: none;
    margin: 10px;
    padding: 15px;
    border-radius: 10px;
    border-radius: 12px;
    text-align: center;
    background: #272727;
}
.movies li h2 {
    color: aqua;
    padding: 10px 10px 0;
    margin-top: auto;
    font-family: "Oswald",sans-serif;
}
.movies img{
    max-width: 300px;
    border-radius: 12px;
}
#myb{
    background-color: aqua;
    color: black;
    border-radius: 10px;
    width: 100px;
    height: 50px;
    justify-content: center;
    align-items: center;
    margin-left: 570px;
}

  </style>
</head>
<body>
    <button id="myb">get data</button>
    <div class="movies">
        <script src="script.js"></script>
    </div>
</body>
<script>
    function affiche(){

const options = {
    method: 'GET',
    headers: {
        'X-RapidAPI-Key': 'c8eebf3071msh825ba89f4efc485p1eda30jsn5999779417f0',
        'X-RapidAPI-Host': 'online-movie-database.p.rapidapi.com'
    }
};

fetch('https://online-movie-database.p.rapidapi.com/auto-complete?q=game%20', options)
    .then(response => response.json())
    .then(data =>{
         const list = data.d;
        list.map((item) => {
            const name = item.l;
            const poster =item.i.imageUrl;
            const movie = `<li><img src ="${poster}"> <h2>${name}</h2></li>`;
            document.querySelector('.movies').innerHTML+=movie;
        })
        })
    .catch(err => console.error(err));
}
document.getElementById("myb").addEventListener("click",affiche);
</script>
</html>