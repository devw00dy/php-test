<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="../layoyt/basic/css/wooseok.css">
  <link rel="stylesheet" type="text/css" href="../layoyt/basic/css/community/main.css">
  <link rel="stylesheet" type="text/css" href="../layoyt/basic/css/util/index.css">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>공지사항 | 김다우 테스트</title>
</head>

<body>
  <div id="container">
    <div id="contents">

      <!-- breadcrumb -->
      <div class="breadcrumb">
        <ol>
          <li>홈</li>
        </ol>
        <ol>
          <li>게시판</li>
        </ol>
        <ol>
          <li>공지사항</li>
        </ol>
      </div>

      <!-- title -->
      <div class="title">
        <h2>
          <font>공지사항</font>
        </h2>
        <p>공지사항입니다.</p>
      </div>

      <!-- table -->
      <div id="table">
        <table>
          <thead>
            <tr>
              <th>번호</th>
              <th>제목</th>
              <th>작성자</th>
              <th>작성일</th>
              <th>조회</th>
            </tr>
          </thead>
          <tbody>

          </tbody>
        </table>
      </div>

      <!-- search -->
      <div id="boaedSearch">
        <fieldset class="searchForm">
          <div class="form">
              <div class="selectWrap">
                <select required>
                  <option value="" disabled selected>선택</option>
                  <!-- <option value="">선택</option> -->
                </select>
              </div>

              <div class="selectWrap">
                <select required>
                  <option value="" disabled selected>제목</option>
                  <!-- <option value="">선택</option> -->
                </select>
              </div>

              <input type="text" class="searchInput">
              </input>
              <button id="btn">
                찾기
              </button>
          </div>
        </fieldset>
      </div>

      <!-- pagenation -->
      <div id="pagenation">
        <div class="icon">
          <svg fill="#000000" height="14px" width="14px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330.002 330.002" xml:space="preserve">
            <path id="XMLID_227_" d="M233.25,306.001L127.5,165.005L233.25,24.001c4.971-6.628,3.627-16.03-3-21c-6.627-4.971-16.03-3.626-21,3L96.75,156.005c-4,5.333-4,12.667,0,18l112.5,149.996c2.947,3.93,7.451,6.001,12.012,6.001c3.131,0,6.29-0.978,8.988-3.001C236.878,322.03,238.221,312.628,233.25,306.001z"/>
          </svg>
        </div>
        <div class="page">
          1
        </div>
        <div class="icon">
          <svg fill="#000000" height="14px" width="14px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330 330" xml:space="preserve">
            <path id="XMLID_222_" d="M250.606,154.389l-150-149.996c-5.857-5.858-15.355-5.858-21.213,0.001c-5.857,5.858-5.857,15.355,0.001,21.213l139.393,139.39L79.393,304.394c-5.857,5.858-5.857,15.355,0.001,21.213C82.322,328.536,86.161,330,90,330s7.678-1.464,10.607-4.394l149.999-150.004c2.814-2.813,4.394-6.628,4.394-10.606C255,161.018,253.42,157.202,250.606,154.389z"/>
          </svg>
        </div>
      </div>

    </div>
  </div>
</body>

<!-- <script src="../layoyt/basic/js/community.js"></script> -->

</html>