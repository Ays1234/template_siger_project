<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta
                  name="viewport"
                  content="width=device-width, initial-scale=1.0"
            />
			<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
	  />
            <link rel="stylesheet" href="berita.css" />
            <title>Halaman Berita</title>
      </head>
      <body>
		<nav>
			<div class="menu-btn">
				  <i class="fa fa-bars"></i>
			</div>
			<div class="wrapper">
				  <div class="logo">
						<a href="#">SigerProject.com</a>
				  </div>

				  <div class="menu tampil">
						<ul>
							  <li><a href="#home">Home</a></li>
							  <li><a href="#about">About</a></li>
							  <li><a href="berita.html">Berita</a></li>
							  <li><a href="#kontak">Kontak</a></li>
						</ul>
				  </div>
			</div>
	  </nav>

	
          <!-- bagian sidebar website -->
		<aside class="sidebar">
			<div class="widget">
				<h2>Tutorial</h2>
				<p>Selamat datang , situs ini</p>
			</div>
			<div class="widget">
				<h2>Judul</h2>
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam nihil ducimus necessitatibus? Totam aliquam iste fugit laudantium suscipit, a minus assumenda, ratione omnis est deleniti obcaecati repellat at sunt perspiciatis..</p>
			</div>
		</aside>
		<!-- akhir bagian sidebar website -->

<div class="blog">
			<div class="conteudo">
				<div class="post-info">
					Di Posting Oleh <b>Diki Alfarabi Hadi</b>
				</div>
				<img src="https://www.malasngoding.com/wp-content/uploads/2016/02/tutorial-css-bahasa-indonesia.png">
				<h1> Template Sederhana HTML & CSS </h1>
				<hr>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<a href="#" class="continue-lendo">Selengkapnya →</a>
			</div>
			<div class="conteudo">
				<div class="post-info">
					Di Posting Oleh <b>Diki Alfarabi Hadi</b>
				</div>
				<img src="https://www.malasngoding.com/wp-content/uploads/2016/02/tutorial-html-bahasa-indonesia.png">
				<h1> Belajar HTML Lengkap </h1>
				<hr>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<a href="#" class="continue-lendo">Selengkapnya →</a>
			</div>
		</div>
		<!-- akhir bagian konten Blog -->
	</div>


      </body>
</html>

		<!-- akhir bagian konten Blog -->
	</div>

      </body>
	  <script>
		document
			  .querySelector('.menu-btn')
			  .addEventListener('click', () =>
					document
						  .querySelector('.menu')
						  .classList.toggle('tampil')
			  );
  </script>
</html>
