<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Drop Down Sidebar Menu | CodingLab </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
        <i class='fa fa-paw'></i>
        <span class="logo_name">Paddy Paws</span>
    </div>
    <ul class="nav-links">
      <li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Category</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Category</a></li>
          <li><a href="#">Pets</a></li>
          <li><a href="#">Healthcare</a></li>
          <li><a href="#">Pet Food</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Posts</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Posts</a></li>
        </ul>
      </li>
      <li>
        <a href="available.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Products</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Products</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cart' ></i>
          <span class="link_name">My Cart</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">My Cart</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-bookmarks' ></i>
          <span class="link_name">Certificate</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Certificate</a></li>
        </ul>
      </li>
      <li>
        <a href="feedback/feedback.php">
          <i class='bx bx-history' ></i>
          <span class="link_name">Feedback</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Feedback</a></li>
        </ul>
      </li>
      <li class="wow fadeInDown"><a href="#loginModal" data-toggle="modal" data-target="#loginModal">
          <i class='bx bx-user' ></i>
          <span class="link_name">Admin Login</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Admin Login</a></li>
        </ul>
      </li>
</ul>
  </div>

  <script src="script.js"></script>

</body>
</html>
