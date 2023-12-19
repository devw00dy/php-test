function statusChange(statusItem) {
    var strText = $(statusItem).text();
    $("#toparea_searchbar").keyword(strText);
 }
 
 
 var controller = 0;
 function DisplaySideMenu() {
     const SideMenuSection = document.querySelector("#SideMenu");
     const Left_SideMenuSection = document.querySelector(".Side_Left_Section");
     const Right_SideMenuSection = document.querySelector(".Side_Right_Section");
     
     if(controller == 0) { 
         SideMenuSection.style.visibility = "visible";
         Left_SideMenuSection.style.marginLeft ="0%";
         Right_SideMenuSection.style.marginLeft ="0%";
         
         controller++;
     }
     else {
         SideMenuSection.style.visibility = "hidden";
         Left_SideMenuSection.style.marginLeft ="-200%";
         Right_SideMenuSection.style.marginLeft ="-200%";
         controller--;
     }
 }
 
 
 const Brand_Btn = document.querySelectorAll('#Brand_Btn');
 let Inner_Content = document.querySelectorAll('#BranInfo_Inner_Box');
 var BRAND_Count = 0;
 
 function BRAND_PageChange() {
     Inner_Content[BRAND_Count].style.visibility = 'hidden';
     Inner_Content[BRAND_Count].style.opacity = '0';
     Inner_Content[BRAND_Count].style.zIndex = '-1';
     BRAND_Count = (++BRAND_Count + Inner_Content.length) % Inner_Content.length;
 
     Inner_Content[BRAND_Count].style.visibility = "visible";
     Inner_Content[BRAND_Count].style.opacity = "1";
     Inner_Content[BRAND_Count].style.zIndex = '1';
 }
 
 
 var Side_SpanSet = document.getElementsByName("Side_btn");
 var Side_LowerSet = document.getElementsByName("Side_Lower");
 
 function Side_Change(value) {
     for(var j = 0; j < Side_SpanSet.length ;j++) {
         if(j == value) {
             Side_SpanSet[j].style.borderTop = "3px solid black";
             Side_SpanSet[j].style.borderLeft = "1px solid #eee";
             Side_SpanSet[j].style.borderRight = "1px solid #eee";
             Side_SpanSet[j].style.backgroundColor = "white";
 
             Side_LowerSet[j].style.opacity = "1";
             Side_LowerSet[j].style.display = "inline-block";
         }
         else {
             Side_SpanSet[j].style.zIndex = "0";
             Side_SpanSet[j].style.border = "0";
             Side_SpanSet[j].style.backgroundColor = "#eee";
 
             Side_LowerSet[j].style.opacity = "0";
             Side_LowerSet[j].style.display = "none";
         }
     }
 }
 
 
 
 var SpanSet = document.getElementsByName("Pagebtn");
 var ChangedText = document.querySelectorAll("#Changed_Text");
 var ChangedPicture = document.querySelectorAll("#Changed_Picture");
 var Tabs_Scroll_Page = document.getElementById("TABS_Section_Right");
 var Lower = document.getElementById("Lower"); 
 
 function Change(value) {
     Lower.style.opacity = "0";
     
     for(var j = 0; j < SpanSet.length ;j++) {
         if(j == value) {
             SpanSet[j].style.border = "2px solid black";
             SpanSet[j].style.borderBottom = "0";
             SpanSet[j].style.zIndex = "2";
         }
         else {
             SpanSet[j].style.zIndex = "0";
             SpanSet[j].style.border = "1px solid black";
             SpanSet[j].style.backgroundColor = "#eee";
         }
     }
     
     Tabs_Scroll_Page.scrollLeft = 0;
     setTimeout(function () { /*화면 변경 시 부드럽게 넘어가게 하기 위해 setTimeout 사용*/
       for(var j = 0; j < SpanSet.length ;j++) {
         if(j == value) {
             ChangedText[j].style.opacity = "1";
             ChangedText[j].style.display = "block";
             
             ChangedPicture[j].style.opacity = "1";
             ChangedPicture[j].style.display = "inline-block";
         }
         else {
             ChangedText[j].style.display = "none";
             ChangedPicture[j].style.display = "none";
         }
     }
     Lower.style.opacity = "1";
     }, 200);
     
     Tabs_Scroll_Page.scrollLeft = 0;
     
     Lower_ChangeBtn[1].classList.remove("Btn_On");
     Lower_ChangeBtn[0].classList.add("Btn_Off");
     Lower_ChangeBtn[1].classList.remove("Btn_Off");
     Lower_ChangeBtn[1].classList.add("Btn_On");
     
 }
 
 /*
 var Tabs_ImgSet = 0;
 var PageVal = 0;   
 var Btn_flag = 0;
 var EvevtPageSet = document.getElementById("Event_IMG");
 
 if(window.location.href == "https://big300.cafe24.com/skin-skin5" || window.location.href == "https://big300.cafe24.com/skin-skin5/#") {
      Tabs_ImgSet = document.getElementsByName("Tabs_Img");
      PageVal =  Tabs_ImgSet[0].offsetWidth;
     Btn_flag = Tabs_Scroll_Page.scrollWidth - Tabs_Scroll_Page.clientWidth; // = 1367; 해당에 scrollLeft가 근접하면 right 버튼을 disable
 }
 */
 
 var Lower_ChangeBtn = document.querySelectorAll("#Lower_ChangeBtn"); 
 
 function Tabs_ScrollX(direction) {
     Tabs_Scroll_Page.style.scrollBehavior = "smooth";
     if(direction == 1) {Tabs_Scroll_Page.scrollLeft -= PageVal;}
     else {Tabs_Scroll_Page.scrollLeft += PageVal;}
     
     setTimeout(function () { // scrollWidth - 1923 / clientWidth - 556 / scrollLeft - 1366.5
          if(Btn_flag - Tabs_Scroll_Page.scrollLeft < 30) {
             Lower_ChangeBtn[1].classList.remove("Btn_On");
             Lower_ChangeBtn[1].classList.add("Btn_Off");
         }
         else {
             Lower_ChangeBtn[1].classList.remove("Btn_Off");
             Lower_ChangeBtn[1].classList.add("Btn_On");
         }
         
         if(Tabs_Scroll_Page.scrollLeft == 0) {
             Lower_ChangeBtn[0].classList.remove("Btn_On");
             Lower_ChangeBtn[0].classList.add("Btn_Off");
         }
         else {
             Lower_ChangeBtn[0].classList.remove("Btn_Off");
             Lower_ChangeBtn[0].classList.add("Btn_On");
         }
     }, 380);
 }
 
 
 var EvevtPageSet = document.getElementsByName("Event_IMG");
 var EventPageCnt = 1;
 
 function ChangeEventPage() {
     EvevtPageSet[EventPageCnt%2].style.opacity = "0";
     EvevtPageSet[(++EventPageCnt)%2].style.opacity = "1";
 }
 
 
 const DeskTapBar = document.querySelector("#DeskTapBar");
 const DeskTap = document.querySelector("#DeskTap");
 const DeskTapBtn = document.querySelector("#DeskTapBtn_IMG");
 
 var Deskcnt = 0;
 function HelpDeskCtrl() {
     if(Deskcnt==0) {
         DeskTapBar.style.right = "100px";
         DeskTap.style.right = "0px";
         DeskTapBtn.src = "https://big300.cafe24.com/web/SideButton/side_right_icon1.png";
         Deskcnt++;
     }
     else {
         DeskTapBar.style.right = "1px";
         DeskTap.style.right = "-100px";
         DeskTapBtn.src = "https://big300.cafe24.com/web/SideButton/side_right_icon2.png";
         Deskcnt--;
     }
 }
 
 
 const Review_Bar = document.getElementById("Review_Bar2");
 const LeftBtn = document.getElementById("ScrollToLeft");
 const RightBtn = document.getElementById("ScrollToRight");
 
 function ScrolltoX(Direction) {
     var Scrollnow = Review_Bar.scrollLeft;
     if(Direction == 0){
         Review_Bar.scrollLeft -= 300;
         LeftBtn.pointeEvents = "none";
         RightBtn.pointeEvents = "auto";
     }
     else {
         Review_Bar.scrollLeft += 300;
         RightBtn.pointeEvents = "none";
         LeftBtn.pointeEvents = "auto";
         
     }
 }
 
 
 
 const Insta_Bar = document.getElementById("Insta_Inner");
 
 function Insta_ScrolltoX(Direction) {
     var Insta_Content = document.getElementById("first_Section");
     var Insta_Content_Width = Insta_Content.offsetWidth + 3;
     console.log(Insta_Bar.scrollLeft);
     if(Direction == 0){
         if(Insta_Bar.scrollLeft == 0) {
             Insta_Bar.scrollLeft = 1001;
         }
         else {Insta_Bar.scrollLeft -= Insta_Content_Width;}
     }
     else {
         if(Insta_Bar.scrollLeft == 1001) {
             Insta_Bar.scrollLeft = 0;
         }
         else {Insta_Bar.scrollLeft += Insta_Content_Width;}
     }
 }
 
 function LowerSelect(elem) {
     if(elem.classList.contains('Lower_selected') == false) {elem.classList.add("Lower_selected");}
     else {elem.classList.remove("Lower_selected");}
 }
 
 const Time_Sale_Top = document.getElementById("Time_Sale_Top");
 const Power_Sale_Top = document.getElementById("Power_Sale_Top");
 const Winter_Sale_Top = document.getElementById("Winter_Sale_Top");
 var BackSpace = 0;
 var Inner_BackSpace = 0;
 
 if(window.location.href == "https://big300.cafe24.com/product/project.html?cate_no=95") {
     Time_Sale_Top.style.display = "block"; 
     Power_Sale_Top.style.display = "none"; 
     Winter_Sale_Top.style.display = "none"; 
     
     BackSpace = document.getElementById("contents");
     BackSpace.style.backgroundColor = "rgb(225, 220, 209)";
     
     Inner_BackSpace = document.getElementsByClassName("prdList grid4");
     Inner_BackSpace[0].style.backgroundColor = "white";
     
 }
 else if(window.location.href == "https://big300.cafe24.com/product/project.html?cate_no=96") {
     Time_Sale_Top.style.display = "none"; 
     Power_Sale_Top.style.display = "block";
     Winter_Sale_Top.style.display = "none";  
     
     BackSpace = document.getElementById("contents");
     BackSpace.style.backgroundImage = "url(https://big300.cafe24.com/TimeSale_Page/blackfriday-bg.png)";
     
     Inner_BackSpace = document.getElementsByClassName("prdList grid4");
     Inner_BackSpace[0].style.backgroundColor = "rgba(255,255,255,.8)";
 }
 else if(window.location.href == "https://big300.cafe24.com/product/project.html?cate_no=97") {
     Time_Sale_Top.style.display = "none"; 
     Power_Sale_Top.style.display = "none"; 
     Winter_Sale_Top.style.display = "block"; 
     
     BackSpace = document.getElementById("contents");
     BackSpace.style.background = "url(https://big300.cafe24.com/TimeSale_Page/summer-bg.png) repeat rgb(146, 220, 241)"; 
     Inner_BackSpace = document.getElementsByClassName("prdList grid4");
     Inner_BackSpace[0].style.backgroundColor = "rgba(255,255,255,.8)";
 }
 
 var MobileSearchBarFlag = 0;
 function DisplayMobileSearchBar() {
     const MobileSearchBar = document.getElementById("Mobile_Top_Search");
     const MobileSearchBarForm = document.getElementById("Mobile_Top_Search_Form");
     if(MobileSearchBarFlag == 0) {MobileSearchBar.style.height = "100px"; MobileSearchBarForm.style.height = "100%"; MobileSearchBarFlag = 1;}
     else {MobileSearchBar.style.height = "0px"; MobileSearchBarForm.style.height = "0%"; MobileSearchBarFlag = 0;}
     
 }