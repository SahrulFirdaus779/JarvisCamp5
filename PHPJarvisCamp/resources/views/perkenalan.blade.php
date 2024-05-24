<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkenalan Diri</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .background {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
            background: black;
            overflow: hidden;
        }

        .star {
            position: absolute;
            width: 2px;
            height: 2px;
            background: white;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
            animation: twinkle 2s infinite;
        }

        @keyframes twinkle {
            0%, 100% {
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
        }

        .profile-image {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .card-body {
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.9));
    color: white; 
        }
    </style>
</head>
<body>
    <div class="background"></div>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-dark text-white text-center">
                <h1>Perkenalan Diri</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Tentang Saya</h2>
                        <p>Halo! Nama saya Sahrul Firdaus. Saya berasal dari Bogor dan saat ini saya sedang belajar Laravel, sebuah framework PHP yang powerful untuk pengembangan web.</p>
                        <h3>Latar Belakang</h3>
                        <p>Saya adalah mahasiswa aktif di STT Terpadu Nurul Fikri dan sekarang sedang mengikuti kursus JarvisCamp untuk meningkatkan keterampilan saya dalam pengembangan perangkat lunak. Selama di kampus, saya aktif dalam berbagai organisasi dan kegiatan yang berkaitan dengan teknologi informasi.</p>
                        <h3>Hobi dan Minat</h3>
                        <p>Hobi saya adalah ngoprek komputer, membaca, dan menulis. Saya sangat menikmati mencari tahu tentang bagaimana sesuatu bekerja dan mencoba memodifikasi atau meningkatkan performa perangkat keras dan perangkat lunak komputer. Saya juga suka membaca buku tentang teknologi terbaru, ilmu pengetahuan, dan fiksi ilmiah.  saya juga senang baca novel tentunya. Menulis adalah cara saya mengekspresikan diri dan berbagi pengetahuan dengan orang lain.</p>
                        <p>Saya sangat tertarik dengan perkembangan teknologi, khususnya dalam bidang kecerdasan buatan, pengembangan aplikasi mobile, dan keamanan siber. Saya selalu berusaha untuk mengikuti perkembangan terbaru dan mempelajari teknologi baru yang dapat membantu saya dalam pekerjaan dan proyek-proyek pribadi.</p>
                        <h3>Cita-cita</h3>
                        <p>Saya berharap bisa menjadi seorang software developer yang handal. Saya ingin bekerja di sebuah perusahaan teknologi besar atau startup yang inovatif, di mana saya bisa berkontribusi dalam menciptakan solusi teknologi yang bermanfaat bagi banyak orang. Dalam jangka panjang, saya bercita-cita untuk mendirikan perusahaan teknologi sendiri yang fokus pada pengembangan perangkat lunak berkualitas tinggi.</p>
                        <h3>Hal yang sudah dipelajari selama kuliah 2 semester</h3>
                        <ul>
                            <li>Pengembangan Web dengan Laravel</li>
                            <li>Analisis Data dengan Python</li>
                            <li>Membuat aplikasi sederhana dengan Python</li>
                            <li>Database Management</li>
                            <li>HTML, CSS, dan JavaScript</li>
                            <li>PHP dan Python</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <img src="https://media.licdn.com/dms/image/D5603AQHI2r01r1-mqg/profile-displayphoto-shrink_200_200/0/1715500259045?e=1721865600&v=beta&t=S4wdCUo9K3jvyzHo3tOmPyPHeINL9gi68XCA18otu-M" class="profile-image" alt="sahr">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function createStars() {
            const background = document.querySelector('.background');
            for (let i = 0; i < 100; i++) {
                const star = document.createElement('div');
                star.classList.add('star');
                star.style.top = `${Math.random() * 100}%`;
                star.style.left = `${Math.random() * 100}%`;
                star.style.animationDelay = `${Math.random() * 2}s`;
                background.appendChild(star);
            }
        }

        createStars();
    </script>
</body>
</html>
