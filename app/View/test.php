<!DOCTYPE html>
<html>
<head>
  <style>
    .item {
      display: flex;
      align-items: center;
      padding: 10px;
      border-bottom: 1px solid #ccc;
    }
    .item:last-child {
      border-bottom: none;
    }
    .item img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      margin-right: 10px;
    }
    .item h3 {
      font-size: 18px;
      margin: 0;
    }
  </style>
</head>
<body>


<div class="col-lg-12 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="owl-carousel owl-theme">
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="../app/View/assets/images/member-item-01.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.01 White Cheese</h4>
                            <span>Digital Marketer</span>
                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="../app/View/assets/images/member-item-04.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.02 Snow Mary</h4>
                            <span>Site Analyst</span>
                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="../app/View/assets/images/member-item-02.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.03 Johnny Egg</h4>
                            <span>Digital Influencer</span>
                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="../app/View/assets/images/member-item-05.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.04 Catherine Phyu</h4>
                            <span>Co Founder</span>
                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="../app/View/assets/images/member-item-03.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.05 Shao Lynn</h4>
                            <span>Chief Marketing</span>
                        </div>
                        
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="../app/View/assets/images/member-item-04.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.06 Emma Honey</h4>
                            <span>Digital Influencer</span>
                        </div>
                        
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="../app/View/assets/images/member-item-06.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.07 Oliva Sofie</h4>
                            <span>Website Analyst</span>
                        </div>
                        
                    </div>
                </div>


  <form>
    <label>Filter by name:</label>
    <input type="text" id="nameFilter">
  </form>
  <div id="items"></div>
  <script>
    var items = [
      { name: 'Alice', image: 'https://picsum.photos/50/50' },
      { name: 'Bob', image: 'https://picsum.photos/50/50' },
      { name: 'Charlie', image: 'https://picsum.photos/50/50' },
      { name: 'Dave', image: 'https://picsum.photos/50/50' },
      { name: 'Eve', image: 'https://picsum.photos/50/50' },
    ];
    var nameFilter = document.getElementById('nameFilter');
    var itemsElement = document.getElementById('items');
    function renderItems() {
      var filteredItems = items;
      if (nameFilter.value) {
        filteredItems = items.filter(function(item) {
          return item.name.toLowerCase().includes(nameFilter.value.toLowerCase());
        });
      }
      itemsElement.innerHTML = '';
      filteredItems.forEach(function(item) {
        var itemElement = document.createElement('div');
        itemElement.classList.add('item');
        itemElement.innerHTML = '<img src="' + item.image + '"><h3>' + item.name + '</h3>';
        itemsElement.appendChild(itemElement);
      });
    }
    nameFilter.addEventListener('input', renderItems);
    renderItems();
  </script>
</body>
</html>
