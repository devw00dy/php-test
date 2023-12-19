<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="\layoyt\basic\css\Customizing.css">
    <link rel="stylesheet" type="text/css" href="\layoyt\basic\css\Customizing-mediaQuery.css">
    <link rel="stylesheet" type="text/css" href="\layoyt\basic\css\layout.css">
    <link rel="stylesheet" type="text/css" href="\layoyt\basic\css\main.css">
    
    <link rel="stylesheet" href="\layoyt\basic\js\Customizing.js">
    <link rel="stylesheet" href="\layoyt\basic\js\layout.js">
    <link rel="stylesheet" href="\layoyt\basic\js\main.js">
</head>
<body>
    <header id="header" class="layout3" style="text-align:center;  width: calc(100% - 50px); height:0px; z-index:999" data-ez="module-0rxtjz0-1;">
        <div data-ez-layout="layout3" data-ez="contents-0t7vrik-1" style="display:inline-block; font-family: 'Montserrat','Noto Sans KR' ,sans-serif;">
            <div class="inner">
                <!-- toparea_shoppinginfo -->
                <div class="toparea display_pc_only" style="position:absolute; top: -15px">
                    <div class="toparea_shoppinginfo">
                        <!-- Layout_multishopList -->
                        <div module="Layout_multishopList">
                            <button type="button" class="toggle">{$current_language} <i aria-hidden="true" class="icon icoArrowRight"></i></button>
                            <ul module="Layout_multishopListitem">
                                <li class="{$selected_class}">
                                    <a href="//{$shop_domain}/">{$locale_language}</a>
                                </li>
                                <li class="{$selected_class}">
                                    <a href="//{$shop_domain}/">{$locale_language}</a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                    
                    <div id="toparea_state" class="toparea_state" data-ez-group="top-util-menu" data-ez-role="list">
                        <form id="SmallSearchBar" action="https://big300.cafe24.com/skin-skin5/product/search.html?keyword=">
                            <div id ="Search_Wrap"><input id="toparea_searchbar" autocomplete="off" fw-filter="" fw-label="검색어" value="20% 번개 할인" type="text" name="keyword"></div>
                            <div id ="SearchNavBar">
                                <ul>
                                    <div style="height:29px !important; font-size: 12px;font-weight: 500; color: #fff;text-align: center; line-height: 29px; position: relative; letter-spacing:0.5px;">주간 인기검색어</div>
                                    <li>
                                        <span class="tag_badge">1</span>
                                        <a href="/product/search.html?keyword=Product">Product</a>
                                    </li>
                                    <li>
                                        <span class="tag_badge">2</span>
                                        <a href="/product/search.html?keyword=Youtube Product">Youtube</a>
                                    </li>
                                    <li>
                                        <span class="tag_badge">3</span>
                                        <a href="/product/search.html?keyword=COLLECTION-BANNER">BANNER</a>
                                    </li>
                                    <li>
                                        <span class="tag_badge">4</span>
                                        <a href="/product/search.html?keyword=COLLECTION-BANNER">COLLECTION</a>
                                    </li>
                                    <li>
                                        <span class="tag_badge">5</span>
                                        <a href="/product/search.html?keyword=TABS">TABS</a>
                                    </li>
                                    <li>
                                        <span class="tag_badge">6</span>
                                        <a href="/product/search.html?keyword=OVERLAY">3컬럼 OVERLAY</a>
                                    </li>
                                </ul>
                            </div>
                        </form>
                        
                        <div class="toparea_state_board">
                            <a data-ez-item="board" href="#none" ><img src="https://big300.cafe24.com/web/HeaderTopRight/Customer.png"><p>&nbsp;고객센터 <i style="margin-bottom:3px" aria-hidden="true" class="icon icoArrowRight"></i></a>
                            <ul module="Layout_BoardInfo">
                                <li><a href="{$link_board_list}">{$board_name}</a></li>
                                <li><a href="{$link_board_list}">{$board_name}</a></li>
                            </ul>
                        </div>
                        <div>
                            <a data-ez-item="logout" module="Layout_stateLogon" href="{$action_logout}" style="margin:0; width:100%; justify-content:center"><img src="https://big300.cafe24.com/web/HeaderTopRight/Logout.png"><p>&nbsp;로그아웃</a>
                            <a data-ez-item="login" module="Layout_statelogoff" href="/member/login.html"><img src="https://big300.cafe24.com/web/HeaderTopRight/Login.png"><p>&nbsp;로그인</p></a>
                        </div>
                    </div>
                    <!-- //toparea_state -->
                </div>
                <!-- //toparea -->
                <div class="top_nav_box" id="top_nav_box" >
                    <div class="top_mypage_Clone">
                        <a onclick="javascript:DisplaySideMenu();" style="cursor: pointer;">
                            <span>
                                <img src="https://big300.cafe24.com/web/SideButton/HamburgerButton.png" id="HamburgerBtn">
                            </span>
                        </a>
                        <a onclick="javascript:DisplayMobileSearchBar();" style="cursor: pointer;">
                            <span>
                                <img src="https://big300.cafe24.com/web/Best-Seller-Bottom-Banner/pngtree-magnifying-glass-vector-design-png-image_3014771-removebg-preview.png" id="search_icon">
                            </span>
                        </a>
                    </div>
                    <!-- //top_mypage -->
                    <a id="LogoBox" href="https://big300.cafe24.com/skin-skin5" style="width: 200px;"><img src="https://big300.cafe24.com/web/Logo/logo_b.png" loading="lazy" ez-prevent="img"></a>
                    <div id="Muti_Menu_Bar" data-ez-module="menu-main/1" data-ez-mode="manual" style="margin: 0 auto;">
                        <div class="xans-element- xans-layout xans-layout-category top_category">
                            <ul>
                                <!--  Header SHOP Section -->
                                <li class="Top_Menu_Name"><a href="#">SHOP</a></li>
                                <div id="SHOP" class="Top_Sub_Section" >
                                    <!--  Product Upload -->
                                    <div data-ez-holder="product_listmain" style="border-right : 1px solid black; display:inline-block; width: 20%; height:100%; vertical-align: top; padding-right:30px">
                                        <div module="product_listmain_10">
                                            <!--
                                                $count = 1
                                                $basket_result = /product/add_basket.html
                                                $basket_option = /product/basket_option.html
                                                $moreview = no
                                                $cache = yes
                                            -->
                                            <ul class="prdList ez-discount-tag-on grid1" data-ez-role="layout ez-discount-tag" data-ez-discount-tag="on">
                                                <!--@import(/product/list_product10.html)-->
                                            </ul>
                                        </div>
                                    </div>
                                    <!--  // Product Upload -->
                                    <!--  SHOP_Contents -->
                                    <div id="SHOP_Contents">
                                        <!--  SHOP_Text -->
                                        <div id="SHOP_Text">
                                            <span>
                                                <ul> 
                                                    <div><a href="https://big300.cafe24.com/product/list.html?cate_no=57">(대분류) INTERIOR</div>
                                                    <li><a href="https://big300.cafe24.com/product/list.html?cate_no=61">(중분류) SMALL</a></li>
                                                    <li><a href="https://big300.cafe24.com/product/list.html?cate_no=62">(중분류) MIDDLE</a></li>
                                                    <li><a href="https://big300.cafe24.com/product/list.html?cate_no=63">(중분류) BIG</a></li>
                                                </ul>
                                            </span>
                                                
                                            <span>
                                                <ul> 
                                                    <div><a href="https://big300.cafe24.com/product/list.html?cate_no=58">(대분류) CLOTHES</div>
                                                    <li><a href="https://big300.cafe24.com/product/list.html?cate_no=64">(중분류) OUTER</a></li>
                                                    <li><a href="https://big300.cafe24.com/product/list.html?cate_no=65">(중분류) SWEATER</a></li>
                                                    <li><a href="https://big300.cafe24.com/product/list.html?cate_no=66">(중분류) SHOES</a></li>
                                                </ul>
                                            </span>
                                            <span>
                                                <ul>
                                                    <div><a href="https://big300.cafe24.com/product/list.html?cate_no=59">(대분류) DIGITALPRODUCT</div>
                                                    <li><a href="https://big300.cafe24.com/product/list.html?cate_no=67">(중분류) SELLPHONE</a></li>
                                                    <li><a href="https://big300.cafe24.com/product/list.html?cate_no=68">(중분류) STUDY</a></li>
                                                </ul>
                                            </span>
                                            <span>
                                                <ul> <div><a href="https://big300.cafe24.com/product/list.html?cate_no=60">(대분류) OTHERS</a></div>
                                                </ul>
                                            </span>
                                        </div>
                                        <!--  // SHOP_Text -->
                                        <!--  SHOP_IMG -->
                                        <div id="SHOP_IMG">
                                            <div><img src="https://big300.cafe24.com/web/SHOP_IMG/s1.jpg"></div>
                                            <div><img src="https://big300.cafe24.com/web/SHOP_IMG/s2.jpg"></div>
                                            <div><img src="https://big300.cafe24.com/web/SHOP_IMG/s3.jpg"></div>
                                            <div><img src="https://big300.cafe24.com/web/SHOP_IMG/s4.jpg"></div>
                                        </div>
                                        <!--  // SHOP_IMG -->
                                    </div>
                                    <!--  // SHOP_Contents -->
                                </div>
                                <!-- // Header SHOP Section -->
                                
                                <!--  Header WEEKLY Section --->
                                <li class="Top_Menu_Name"><a href="#">WEEKLY BEST</a></li>
                                <div id="WEEKLY" class="Top_Sub_Section">
                                    <!--  Product Upload -->
                                    <div data-ez-holder="product_listmain" style="height:100%">
                                        <div module="product_listmain_11" style="text-align: center; height:100%">
                                            <!--
                                                $count = 10
                                                $basket_result = /product/add_basket.html
                                                $basket_option = /product/basket_option.html
                                                $moreview = no
                                                $cache = yes
                                            -->
                                            <ul class="prdList ez-discount-tag-on grid9" data-ez-role="layout ez-discount-tag" data-ez-discount-tag="on" style="height:100%; display: flex; flex-wrap: wrap;">
                                                <!--@import(/product/list_product11.html)-->
                                            </ul>
                                        </div>

                                    </div>
                                    <!--  // Product Upload -->
                                </div>
                                <!--  // Header WEEKLY Section --->
                                                
                                <!--  Header HOTDEAL Section --->
                                <li class="Top_Menu_Name"><a href="#">HOTDEAL</a></li>
                                <div id="HOTDEAL" class="Top_Sub_Section">
                                    <div id="HOTDEALandEVENT_Text">
                                        <div> 
                                            <div><a href="https://big300.cafe24.com/product/project.html?cate_no=95"><h5>타임 세일전</h5></a></div>
                                            <div><a href="https://big300.cafe24.com/product/project.html?cate_no=96"><h5>파워 세일전</h5></a></div>
                                            <div><a href="https://big300.cafe24.com/product/project.html?cate_no=97"><h5>여름 세일전</h5></a></div>
                                        </div>
                                    </div>
                                    <div  style="display:inline-block; width: 64%; height:100%; text-align:center; margin-top: 20px;">
                                        <div style="display:inline-block; width: 90%; height:90%;">
                                            <a href="https://big300.cafe24.com/product/project.html?cate_no=96"><img src ="https://big300.cafe24.com/Fish300/GNB%20IMG/HotDeal.jpg"></a>
                                        </div>
                                    </div>
                                </div>
                                <!--  // Header HOTDEAL Section --->
                                                
                                <!--  Header EVENT Section --->
                                <li class="Top_Menu_Name"><a href="#">EVENT</a></li>
                                <div id="EVENT" class="Top_Sub_Section">
                                    <div id="HOTDEALandEVENT_Text" style="display:inline-block; width: 35%; height:100%; padding-left: 20px; border-right: 0.7px solid gray">
                                        <div style="display:inline-block; width: 90%; height: 40%; margin: 10px 15px 15px 0px; text-align:center;">
                                            <div><a href="https://big300.cafe24.com/product/list.html?cate_no=56"><h5>진행중 이벤트</h5></a></div>
                                            <div><a href="https://big300.cafe24.com/product/list.html?cate_no=58"><h5>종료된 이벤트</h5></a></div>
                                            <div><a href="	https://big300.cafe24.com/product/list.html?cate_no=57"><h5>당첨자 발표</h5></a></div>
                                        </div>
                                    </div>
                                    <div  style="display:inline-block; width: 64%; height:100%; text-align:center; margin-top: 20px;">
                                        <div style="display:inline-block; width: 90%; height:90%;">
                                            <a href="https://big300.cafe24.com/product/project.html?cate_no=96"><img src ="https://big300.cafe24.com/Fish300/GNB%20IMG/%EB%8C%80%EB%AC%BC%EB%82%9A%EC%8B%9C2.jpg"></a>
                                        </div>
                                    </div>
                                </div>
                                <!--  // Header EVENT Section --->
                                                
                                <!--  Header ADD-ON Section --->
                                <li class="Top_Menu_Name"><a href="#">ADD-ON</a></li>
                                <div id="ADD_ON" class="Top_Sub_Section">
                                    <div id="ADD_ON_Inner">
                                        <div id="ADD_ON_Inner_Box">
                                            <div id="ADD_ON_Category"><a href="#"><h5>ABOUT</h5></a></div>
                                            <div><a href="#"><h5>ABOUT ST.1</h5></a></div>
                                            <div><a href="#"><h5>ABOUT ST.2</h5></a></div>
                                            <div><a href="#"><h5>ABOUT ST.3</h5></a></div>
                                            <div><a href="#"><h5>ABOUT ST.4</h5></a></div>
                                            <div><a href="#"><h5>ABOUT ST.5</h5></a></div>
                                            <div><a href="#"><h5>ABOUT ST.6</h5></a></div>
                                            <div><a href="#"><h5>ABOUT ST.7</h5></a></div>
                                            <div><a href="#"><h5>ABOUT ST.8</h5></a></div> 
                                        </div>
                                        <div id="ADD_ON_Inner_Box" style="border-right: 1px solid #eee; border-left: 1px solid #eee;">
                                            <div id="ADD_ON_Category"><a href="#"><h5>BRAND</h5></a></div>
                                            <div><a href="#"><h5>BRAND LIST</h5></a></div>
                                            <div><a href="#"><h5>SHOP TV</h5></a></div>
                                            <div><a href="#"><h5>BRAND INFO ST.1</h5></a></div>
                                            <div><a href="#"><h5>BRAND INFO ST.2<</h5></a></div>
                                            <div style="margin-bottom: 20px"><a href="#"><h5>BRAND INFO ST.3<</h5></a></div>
                                            
                                            <div id="ADD_ON_Category"><a href="#"><h5>CS CENTER</h5></a></div>
                                            <div><a href="#"><h5>CS CENTER ST.1</h5></a></div>
                                            <div><a href="#"><h5>CS CENTER ST.2</h5></a></div>
                                        </div>
                                        <div id="ADD_ON_Inner_Box">
                                            <div id="ADD_ON_Category"><a href="#"><h5>STORE</h5></a></div>
                                            <div><a href="#"><h5>STORE ST.1</h5></a></div>
                                            <div><a href="#"><h5>STORE ST.2</h5></a></div>
                                            <div style="margin-bottom: 20px"><a href="#"><h5>STORE ST.3</h5></a></div>
                                            
                                            <div id="ADD_ON_Category"><a href="#"><h5>ETC</h5></a></div>
                                            <div><a href="#"><h5>폰트아이콘 다자인</h5></a></div>
                                            <div><a href="#"><h5>심플라인아이콘</h5></a></div>
                                            <div><a href="#"><h5>버튼디자인</h5></a></div>
                                            <div><a href="#"><h5>타이틀디자인</h5></a></div>
                                        </div>
                                    </div>
                                </div>
                                <!--  // Header ADD-ON Section --->
                                        
                                <!--  Header COMMUNITY Section --->
                                <li class="Top_Menu_Name"><a href="#">COMMUNITY</a></li>
                                <div id="COMMUNITY" class="Top_Sub_Section">
                                    <div style="display:inline-block; width: 100%; height:100%; padding-left: 20px;">
                                        <div style="display:inline-block; width: 100%; margin: 10px 15px 15px 0px; text-align:center;">
                                            <div style=" text-align:left; padding: 13px; text-align:left; width:90%"><a href="/skin-skin5/board/공지사항/1/"><h5>공지사항</h5></a></div>
                                            <div style=" text-align:left; padding: 13px; text-align:left; width:90%"><a href="#"><h5>구매후기</h5></a></div>
                                            
                                            <div style=" text-align:left; margin: 10px 0px; text-align:left; width:90%; background-color: gray; height: 1px; position: relative; ">
                                                <div style="width: 20px; height: 10px; text-align: center; display: inline-block;  position: absolute; top: -5px; left: 45%; background-color: white">
                                                    <img src="https://big300.cafe24.com/icons/free-icon-up-arrow-2288.png" style="width: 10px; height: 10px; display: inline-block;" ></img>
                                                </div>
                                            </div>
                                            
                                            <div style=" text-align:left; padding: 13px; text-align:left; width:90%"><a href="https://big300.cafe24.com/shop1/front/php/b/board_list.php?board_no=101&is_pcver=T"><h5>상품문의</h5></a></div>
                                            <div style=" text-align:left; padding: 13px; text-align:left; width:90%"><a href="https://big300.cafe24.com/shop1/front/php/b/board_list.php?board_no=5"><h5>자유게시판</h5></a></div>
                                            <div style=" text-align:left; padding: 13px; text-align:left; width:90%"><a href="https://big300.cafe24.com/shop1/front/php/myshop/cons_board_list.php?board_no=9"><h5>1 : 1 상담문의</h5></a></div>
                                        </div>
                                    </div>
                                </div>
                                <!--  // Header COMMUNITY Section --->
                            </ul>
                        </div>
                    </div>
                    <!-- //menu-main/1 -->

                    <div class="top_mypage">
                        <a href="/myshop/index.html"><!--@import(/svg/icon-user.html)--></a>
                        <a href="/order/basket.html" module="Layout_orderBasketcount"><!--@import(/svg/icon-cart.html)--><span class="count {$basket_count_display|display} {$basket_count_display_class}"><span class="{$basket_count_class}"><!-- {$basket_count} --></span></span></a>
                        <!--  **************************************** 햄버거 버튼 위치 ************************************** --->
                        <a id="Hamburger_Btn" onclick="javascript:DisplaySideMenu();" style="cursor: pointer;">
                            <span>
                                <img src="https://big300.cafe24.com/web/SideButton/HamburgerButton.png" id="HamburgerBtn">
                            </span>
                        </a>
                    </div>
                    <!-- //top_mypage -->

                    <div class="top_sidebar">
                        <a href="javascript:;" class="eNavFold"><i aria-hidden="true" class="icon icoNav"></i></a>
                    </div><!-- //top_sidebar -->

                </div>
                <!-- //top_nav_box -->
                <div class="Mobile_Top_Search" id="Mobile_Top_Search">
                    <form action="https://big300.cafe24.com/skin-skin5/product/search.html?keyword=" id="Mobile_Top_Search_Form">
                        <!-- <input id="banner_action" name="banner_action" value="" type="hidden"> -->
                        
                        <div id="search_box" class="xans-element- xans-layout searchBox ">
                            <!-- $category_page=/product/list.html -->
                                <div class="searchForm">
                                    <input id="keyword" name="keyword" fw-filter="" fw-label="검색어" fw-msg="" class="inputTypeText" placeholder="20% 번개할인" onfocus="this.placeholder=''" onblur="this.placeholder='20% 번개할인'" onmousedown="SEARCH_BANNER.clickSearchForm(this)" type="text"> 
                                    <button type="button" class="btnDelete"><span class="btn-mini">삭제</span></button>
                                    <button type="submit" class="btnSearch" onclick="SEARCH_BANNER.submitSearchBanner(this); return false;"><span class="btn-mini">검색</span></button>
                                </div>
                                <div class="xans-element- xans-search xans-search-hotkeyword pop-keyword" id="Search_Select_Option">
                                    <span> 인기검색어 : </span>
                                    <a href="/product/search.html?keyword=Product" class="xans-record-">Product</a>
                                    <a href="/product/search.html?keyword=Youtube" class="xans-record-">Youtube</a>
                                    <a href="/product/search.html?keyword=BANNER" class="xans-record-">BANNER</a>
                                    <a href="/product/search.html?keyword=COLLECTION" class="xans-record-">COLLECTION</a>
                                    <a href="/product/search.html?keyword=3컬럼 OVERLAY" class="xans-record-">3컬럼 OVERLAY</a>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- //inner -->
        </div>
    </header>
</body>
</html>
    


<!--@import(/Side_Menu.html)-->
<!--#ez="1/2"-->