<?php include '../clint/navbar.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Our Team - Balaji Wafer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Space Grotesk', Arial, sans-serif;
      background: #f9f9f9;
      margin: 0;
    }
    .team-section {
      max-width: 1100px;
      margin: 40px auto;
      padding: 32px 18px;
      background: #fff;
      border-radius: 18px;
      box-shadow: 0 4px 18px rgba(0,0,0,0.08);
    }
    .team-section h1 {
      text-align: center;
      color: #b71c1c;
      font-size: 2.2rem;
      margin-bottom: 32px;
      font-family: 'PlaywriteHU-VariableFont_wght', serif;
    }
    .team-section .intro {
      text-align: center;
      font-size: 1.1rem;
      color: #444;
      margin-bottom: 32px;
      line-height: 1.7;
    }
    .team-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 32px;
    }
    .team-card {
      background: #fffbe6;
      border-radius: 14px;
      box-shadow: 0 2px 8px rgba(243,218,73,0.12);
      padding: 24px 12px;
      text-align: center;
      transition: box-shadow 0.2s, transform 0.2s;
    }
    .team-card:hover {
      box-shadow: 0 8px 32px rgba(243,218,73,0.18);
      transform: translateY(-4px) scale(1.03);
    }
    .team-card img {
      width: 110px;
      height: 110px;
      object-fit: cover;
      border-radius: 50%;
      border: 3px solid #f3da49;
      margin-bottom: 14px;
      background: #fff;
    }
    .team-card .name {
      font-size: 1.15rem;
      font-weight: 700;
      color: #b71c1c;
      margin-bottom: 6px;
    }
    .team-card .role {
      font-size: 1rem;
      color: #222;
      margin-bottom: 8px;
      font-weight: 600;
    }
    .team-card .desc {
      font-size: 0.98rem;
      color: #555;
      margin-bottom: 0;
    }
    .team-card .contact {
      margin-top: 10px;
      font-size: 0.95rem;
      color: #b71c1c;
    }
    .team-card .social {
      margin-top: 8px;
      display: flex;
      justify-content: center;
      gap: 12px;
    }
    .team-card .social a {
      color: #b71c1c;
      font-size: 1.2rem;
      text-decoration: none;
      transition: color 0.2s;
    }
    .team-card .social a:hover {
      color: #f3da49;
    }
    @media (max-width: 600px) {
      .team-section {
        padding: 12px 4px;
      }
      .team-card img {
        width: 80px;
        height: 80px;
      }
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
  <div class="team-section">
    <h1>Meet Our Team</h1>
    <div class="intro">
      Our dedicated team at <strong>Balaji Wafer</strong> brings together years of experience, innovation, and passion for delivering the best snacks to our customers. Get to know the people who make it all happen!
    </div>
    <div class="team-grid">
      <?php
      $team = [
        [
          "name" => "Vicky Jethava",
          "role" => "Co-Founder & CEO",
          "img"  => "../assest/team/vicky.jpg",
          "desc" => "Visionary leader and strategist behind Balaji Wafer's success. Vicky oversees company growth and ensures our values are at the heart of every product.",
          "contact" => "vikasjethava285@gmail.com",
          "social" => [
            "facebook" => "#",
            "instagram" => "#"
          ]
        ],
        [
          "name" => "Zala Priyank",
          "role" => "Co-Founder & CTO",
          "img"  => "../assest/",
          "desc" => "Tech innovator, driving digital transformation for our brand. Priyank leads our technology and product development teams.",
          "contact" => "priyankzala@example.com",
          "social" => [
            "facebook" => "#",
            "instagram" => "#"
          ]
        ],
        [
          "name" => "Amit Patel",
          "role" => "Marketing Head",
          "img"  => "../assest/team/amit.jpg",
          "desc" => "Expert in brand building and customer engagement. Amit crafts our marketing strategies and connects with our loyal customers.",
          "contact" => "amitpatel@example.com",
          "social" => [
            "facebook" => "#",
            "instagram" => "#"
          ]
        ],
        [
          "name" => "Sneha Shah",
          "role" => "Operations Manager",
          "img"  => "../assest/team/sneha.jpg",
          "desc" => "Ensures smooth operations and top-notch product quality. Sneha manages logistics and quality control for all our products.",
          "contact" => "snehashah@example.com",
          "social" => [
            "facebook" => "#",
            "instagram" => "#"
          ]
        ]
      ];
      foreach ($team as $member) {
        echo '
        <div class="team-card">
          <img src="'.$member['img'].'" alt="'.$member['name'].'">
          <div class="name">'.$member['name'].'</div>
          <div class="role">'.$member['role'].'</div>
          <div class="desc">'.$member['desc'].'</div>
          <div class="contact"><i class="fa-solid fa-envelope"></i> '.$member['contact'].'</div>
          <div class="social">
            <a href="'.$member['social']['facebook'].'" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="'.$member['social']['instagram'].'" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        ';
      }
      ?>
    </div>
  </div>
  <?php include '../clint/footer.php'; ?>
</body>
</html>