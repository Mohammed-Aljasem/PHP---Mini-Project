<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <title>Document</title>
</head>

<body>
  <?php
  $x = 0;
  $a = false;
  if (array_key_exists('button1', $_POST) || array_key_exists('button4', $_POST)) {
    $a = true;
  } else if (array_key_exists('button2', $_POST)) {
    $a = false;
  }

  $information = [

    [

      'id' => '1',
      'name' => 'adam',
      'birthday' => '14 june',
      'github' => ' https://github.com/oca-class-b',
      'linkedin' => ' https://www.linkedin.com/feed/',
      'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzsIwW9scJxlyF2oHReO4cmuYXLMbJB9dcMQ&usqp=CAU',
      'projects' =>
      [
        [
          [
            'project' => 'HTML and CSS',
            'is_completed' => 'yes'
          ],
          [
            'project_name' => 'wordpress',
            'is_completed' => 'no'
          ]
        ]
      ],
      'attendance' =>
      [
        [
          'check_in' => '15 dec 2020 09:00',
          'check_out' => '15 dec 2020 16:00'
        ],
        [
          'check_in' => '14 dec 2020 08:00',
          'check_out' => '14 dec 2020 14:00'
        ]
      ]
    ],
    [

      'id' => '1',
      'name' => 'mohammed',
      'birthday' => '14 june',
      'github' => ' https://github.com/oca-class-b',
      'linkedin' => ' https://www.linkedin.com/feed/',
      'image' => 'https://media-exp1.licdn.com/dms/image/C4D35AQHcCxMwsWpLvg/profile-framedphoto-shrink_400_400/0/1606386203808?e=1611525600&v=beta&t=e38meqszUz02gZME9JCZMgo4hJkjlE7jyhpvkkSm2MM',
      'projects' =>
      [
        [
          [
            'project' => 'HTML and CSS',
            'is_completed' => 'yes'
          ],
          [
            'project_name' => 'wordpress',
            'is_completed' => 'yes'
          ]
        ]
      ],
      'attendance' =>
      [
        [
          'check_in' => '15 dec 2020 09:00',
          'check_out' => '15 dec 2020 16:00'
        ],
        [
          'check_in' => '14 dec 2020 08:00',
          'check_out' => '14 dec 2020 14:00'
        ]
      ]
    ],
    [

      'id' => '1',
      'name' => 'ahmad',
      'birthday' => '14 june',
      'github' => ' https://github.com/oca-class-b',
      'linkedin' => ' https://www.linkedin.com/feed/',
      'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzsIwW9scJxlyF2oHReO4cmuYXLMbJB9dcMQ&usqp=CAU',
      'projects' =>
      [

        [
          'project' => 'HTML and CSS',
          'is_completed' => 'no'
        ],
        [
          'project_name' => 'wordpress',
          'is_completed' => 'yes'
        ]

      ],
      'attendance' =>
      [
        [
          'check_in' => '15 dec 2020 09:00',
          'check_out' => '15 dec 2020 16:00'
        ],
        [
          'check_in' => '14 dec 2020 08:00',
          'check_out' => '14 dec 2020 14:00'
        ]
      ]
    ]
  ];

  for ($i = 0; $i < count($information); $i++) {

    for ($j = 0; $j <= $i; $j++) {
    }
    if (array_search("yes", $information[1]['projects'][1])) {
      echo "yes";
    } else {
      echo "no";
    }
  }

  ?>
  <div class="container-fluid" method="post">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul method="post">
            <form class="navbar-nav" action="" method="post">

              <li class="nav-item">
                <button class="nav-link active" type="submit" name="button1" aria-current="page">Home</button>
              </li>
              <li class="nav-item">
                <button class="nav-link" type="submit" name="button2" href="#">Features</button>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </form>
          </ul>
        </div>
      </div>
    </nav>


    <div>
      <form class="row row-cols-1 row-cols-md-3 g-4" method="post">

        <?php
        if ($a == false) {
          for ($i = 0; $i < count($information); $i++) {

        ?>
            <div class="col">

              <div class="card___container">
                <div class="profile__image">
                  <img src=<?php
                            echo $information[$i]['image'];
                            ?> />
                </div>
                <div class="profile___name">
                  <p><?php
                      echo $information[$i]['name'];
                      ?></p>
                </div>
                <div class="profile___birth">
                  <p><?php
                      echo $information[$i]['birthday'];
                      ?></p>
                  </p>
                </div>
                <div class="profile___progress"></div>
                <div class="social___links">
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                  <a href="#"><i class="fab fa-github"></i></a>
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <input type="submit" name="button4" class="button" value="Button" />
                </div>
              </div>
            </div>
          <?php
          }
          ?>
        <?php
        } else {
        ?>
          <div class="profile___container">
            <div class="profile___backCover"></div>
            <div class="profile___information">
              <div class="profile___hisImage"></div>
              <div class="profile___hisName"></div>
              <div class="profile___hisBirth"></div>
              <div class="social___links">
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
              </div>
            </div>
          </div>
        <?php
        }
        ?>

      </form>

    </div>
  </div>
</body>

</html>