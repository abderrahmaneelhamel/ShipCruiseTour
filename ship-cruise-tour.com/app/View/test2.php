<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../app/View/assets/css/bootstrap.css">
    <link rel="stylesheet" href="../app/View/assets/css/style2.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <script src="../app/View/assets/js/bootstrap.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
    <div class="movies"></div>
</body>
<script>
const options = {
    method: 'GET',
    headers: {
        'X-RapidAPI-Key': 'ac207a43b8msha17b405f87c2a72p1f442ajsn5cdb8187e21e',
        'X-RapidAPI-Host': 'free-to-play-games-database.p.rapidapi.com'
    }
};

fetch('https://free-to-play-games-database.p.rapidapi.com/api/filter?tag=3d.mmorpg.fantasy.pvp&platform=pc', options)
    .then(response => response.json())
    .then(data =>{
         const list = data;
        list.map((item) => {
            const name = item.title;
            const poster =item.thumbnail;
            const movie = `<li><img src ="${poster}"> <h2>${name}</h2></li>`;
            document.querySelector('.movies').innerHTML+=movie;
        })
        })
    .catch(err => console.error(err));
</script>
</html>