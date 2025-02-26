<?php
session_start();
?>
<style>
/* Style untuk dropdown */
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    top: 100%; /* Posisikan dropdown di bawah */
    left: 50%;
    transform: translateX(-50%); /* Supaya dropdown tetap di tengah */
    background-color: white;
    min-width: 120px;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 100;
    border-radius: 5px;
    flex-direction: column; /* Isi dropdown harus ke bawah */
}

.dropdown-content a {
    color: black;
    padding: 10px 15px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: rgb(182, 26, 26);
}

/* Pastikan dropdown muncul ke bawah saat hover */
.dropdown:hover .dropdown-content {
    display: flex; /* Tetap flex */
    flex-direction: column; /* Supaya isinya turun */
}
#searchMovie {
    width: 220px; /* Sesuaikan biar gak terlalu lebar */
    padding: 8px 12px;
    border: 2px solid #ccc;
    border-radius: 8px; /* Dikit aja biar ga terlalu kotak */
    font-size: 14px;
    outline: none;
    transition: border 0.3s ease-in-out;
}

#searchMovie:focus {
    border-color: #ff4757; /* Warna merah saat fokus */
}

.search-container {
    position: relative;
    display: inline-block;
}

.search-results {
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    z-index: 10;
    overflow: hidden;
}
#movieResults {
    position: absolute;
    top: 100%; /* Biar muncul pas di bawah input */
    left: 0;
    width: 55%; /* Biar lebarnya sama kayak input */
    background: white;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    max-height: 200px;
    overflow-y: auto;
    z-index: 999;
    display: none;
    padding: 10px;
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* Tampilkan dalam 3 kolom */pekgs{}Y{}y
+    gap: 10px; /* Jarak antar elemen */
    text-align: center;
}

.relative {
    position: relative; /* Biar elemen anaknya (dropdown) tetap di dalam */
}

#movieResults li {
    padding: 8px;
    cursor: pointer;
    transition: background 0.2s;
    list-style: none;
    font-size: 14px;
    font-weight: bold;
}

#movieResults li:hover {
    background: #f2f2f2;
}



</style>
<header class="header">
        <div class="header__top">
        </div>
      
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="index.php"><img src="image/xx1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.php">Home</a></li>
                            <li class="active"><a href="./upcoming.php">Upcoming</a></li>
                            <li class="active"><a href="theater.php">Theater</a>
                                
                            </li>
                            <li class="active"><a href="./usia.php">Usia</a>
                            <ul class="header__menu__dropdown">
                                    <li><a href="usia.php?usia=SU">SU</a></li>
                                    <li><a href="usia.php?usia=13">13</a></li>
                                    <li><a href="usia.php?usia=17">17</a></li>
                                </ul></li>
                            
                            <li class="active"><a href="./genre.php">Genre</a>
                            <ul class="header__menu__dropdown">
                                    <li><a href="genre.php?genre=Action">Action</a></li>
                                    <li><a href="genre.php?genre=Adventure">Adventure</a></li>
                                    <li><a href="genre.php?genre=Animation">Animation</a></li>
                                    <li><a href="genre.php?genre=Biography">Biography</a></li>
                                    <li><a href="genre.php?genre=Cartoon">Cartoon</a></li>
                                    <li><a href="genre.php?genre=Comedy">Comedy</a></li>
                                    <li><a href="genre.php?genre=Crime">Crime</a></li>
                                    <li><a href="genre.php?genre=Disaster">Disaster</a></li>
                                    <li><a href="genre.php?genre=Documentary">Documentary</a></li>
                                    <li><a href="genre.php?genre=Drama">Drama</a></li>
                                    <li><a href="genre.php?genre=Epic">Epic</a></li>
                                    <li><a href="genre.php?genre=Erotic">Erotic</a></li>
                                    <li><a href="genre.php?genre=Experimental">Experimental</a></li>
                                    <li><a href="genre.php?genre=Family">Family</a></li>
                                    <li><a href="genre.php?genre=Fantasy">Fantasy</a></li>
                                    <li><a href="genre.php?genre=Film-Noir">Film-Noir</a></li>
                                    <li><a href="genre.php?genre=History">History</a></li>
                                    <li><a href="genre.php?genre=Horror">Horror</a></li>
                                    <li><a href="genre.php?genre=Martial Arts">Martial Arts</a></li>
                                    <li><a href="genre.php?genre=Music">Music</a></li>
                                    <li><a href="genre.php?genre=Musical">Musical</a></li>
                                    <li><a href="genre.php?genre=Mystery">Mystery</a></li>
                                    <li><a href="genre.php?genre=Political">Political</a></li>
                                    <li><a href="genre.php?genre=Physchological">Psychological</a></li>
                                    <li><a href="genre.php?genre=Romance">Romance</a></li>
                                    <li><a href="genre.php?genre=Sci-Fi">Sci-Fi</a></li>
                                    <li><a href="genre.php?genre=Sport">Sport</a></li>
                                    <li><a href="genre.php?genre=Superhero">Superhero</a></li>
                                    <li><a href="genre.php?genre=Survival">Survival</a></li>
                                    <li><a href="genre.php?genre=Thiriller">Thriller</a></li>
                                    <li><a href="genre.php?genre=War">War</a></li>
                                    <li><a href="genre.php?genre=Western">Western</a></li>
                                </ul></li>
                                <div class="relative">
                                <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                                <input type="text" id="searchMovie"/>
                                <ul id="movieResults"></ul>
                            </div>

                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                <div class="header__cart"> 
                        <div class="header__top__right__auth">
                        <?php if(isset($_SESSION['name'])): ?>
<div class="dropdown">
<a href="#" class="dropbtn"><i class="fa fa-user"></i> <?php echo $_SESSION['name']; ?>
▼</a>
<div class="dropdown-content">
<a href="riwayat.php">Riwayat Transaksi</a>
<a href="logout.php">Logout</a>
</div>
</div>
<?php else: ?>
<a href="login.php"><i class="fa fa-user"></i> Login</a>
<?php endif; ?>
            </div>
                    </div>
                </div>
            </div>
            
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
        <script>
  const searchInput = document.getElementById("searchMovie");
  const resultsList = document.getElementById("movieResults");

  searchInput.addEventListener("input", function () {
    const query = this.value.trim();
    resultsList.innerHTML = "";

    if (query.length > 0) {
      fetch(`get_movies.php?q=${query}`)
        .then((response) => response.json())
        .then((data) => {
          resultsList.classList.toggle("hidden", data.length === 0);
          resultsList.innerHTML = ""; 

          data.forEach((movie) => {
            const li = document.createElement("li");
            li.textContent = movie.nama_film;
            li.className =
              "p-2 hover:bg-blue-100 cursor-pointer transition-all duration-200";

           
            li.onclick = () => {
              window.location.href = `film.php?id=${movie.id}`;
            };

            resultsList.appendChild(li);
          });
        })
        .catch((error) => console.error("Error fetching data:", error));
    } else {
      resultsList.classList.add("hidden");
    }
  });

  document.addEventListener("click", function (e) {
    if (!searchInput.contains(e.target) && !resultsList.contains(e.target)) {
      resultsList.classList.add("hidden");
    }
  });
</script>


    </header>