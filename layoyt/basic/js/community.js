function breadcrumb(){
    const paths = ["홈", "맵"];
    const breadcrumb = document.querySelector(".breadcrumb");
    const breadcrumbList = document.createElement("ol")

    paths.map((list) => {
        const item = document.createElement("li")
        const btn = document.createElement("a");
        btn.className = "btn";
        btn.href = list;
        btn.innerHTML = list;
        item.appendChild(btn);
        breadcrumbList.appendChild(item)
    });

    breadcrumb.appendChild(breadcrumbList)
};

function makeTitle(){
    const titleText = "공지사항";
    const subText = "공지사항";
    const titleBox = document.querySelector(".title");
    const mainTitle = document.createElement("h2");
    const subTitle = document.createElement("h4");

    mainTitle.innerHTML = titleText;
    subTitle.innerHTML = subText;

    titleBox.appendChild(mainTitle);
    titleBox.appendChild(subTitle);
};

function init(){
    breadcrumb();
    makeTitle();
};

init();