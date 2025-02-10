<?php

  // variáveis das imgs svg 
  $iconEnsino = '
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
    <path d="M13.4 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V12.6" stroke="#EF7D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M2 6H6" stroke="#EF7D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M2 10H6" stroke="#EF7D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M2 14H6" stroke="#EF7D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M2 18H6" stroke="#EF7D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M21.378 5.62615C21.7763 5.22779 22.0001 4.68751 22.0001 4.12415C22.0001 3.56079 21.7763 3.0205 21.378 2.62215C20.9796 2.22379 20.4393 2 19.876 2C19.3126 2 18.7723 2.22379 18.374 2.62215L13.364 7.63415C13.1262 7.87177 12.9522 8.16548 12.858 8.48815L12.021 11.3581C11.9959 11.4442 11.9944 11.5354 12.0166 11.6222C12.0389 11.7091 12.084 11.7883 12.1474 11.8517C12.2108 11.9151 12.2901 11.9603 12.3769 11.9825C12.4637 12.0048 12.5549 12.0032 12.641 11.9781L15.511 11.1411C15.8336 11.0469 16.1274 10.8729 16.365 10.6351L21.378 5.62615Z" stroke="#EF7D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>';

  $iconFormacao = '
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
    <path d="M4.5 16.4998C3 17.7598 2.5 21.4998 2.5 21.4998C2.5 21.4998 6.24 20.9998 7.5 19.4998C8.21 18.6598 8.2 17.3698 7.41 16.5898C7.02131 16.2188 6.50929 16.0045 5.97223 15.9879C5.43516 15.9712 4.91088 16.1536 4.5 16.4998Z" stroke="#EF7D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M12 14.9998L9 11.9998C9.53214 10.6192 10.2022 9.29582 11 8.04976C12.1652 6.18675 13.7876 4.65281 15.713 3.59385C17.6384 2.53489 19.8027 1.98613 22 1.99976C22 4.71976 21.22 9.49976 16 12.9998C14.7369 13.7985 13.3968 14.4685 12 14.9998Z" stroke="#EF7D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M9 12H4C4 12 4.55 8.97002 6 8.00002C7.62 6.92002 11 8.00002 11 8.00002" stroke="#EF7D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M12 15V20C12 20 15.03 19.45 16 18C17.08 16.38 16 13 16 13" stroke="#EF7D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>';

  $iconConexao = '
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
    <path d="M21 16H17C16.4477 16 16 16.4477 16 17V21C16 21.5523 16.4477 22 17 22H21C21.5523 22 22 21.5523 22 21V17C22 16.4477 21.5523 16 21 16Z" stroke="#EF7D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M7 16H3C2.44772 16 2 16.4477 2 17V21C2 21.5523 2.44772 22 3 22H7C7.55228 22 8 21.5523 8 21V17C8 16.4477 7.55228 16 7 16Z" stroke="#EF7D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M14 2H10C9.44772 2 9 2.44772 9 3V7C9 7.55228 9.44772 8 10 8H14C14.5523 8 15 7.55228 15 7V3C15 2.44772 14.5523 2 14 2Z" stroke="#EF7D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M5 16V13C5 12.7348 5.10536 12.4804 5.29289 12.2929C5.48043 12.1054 5.73478 12 6 12H18C18.2652 12 18.5196 12.1054 18.7071 12.2929C18.8946 12.4804 19 12.7348 19 13V16" stroke="#EF7D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M12 12V8" stroke="#EF7D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>';

  $iconDiversidade = '
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
    <path d="M10 3H4C3.44772 3 3 3.44772 3 4V20C3 20.5523 3.44772 21 4 21H10C10.5523 21 11 20.5523 11 20V4C11 3.44772 10.5523 3 10 3Z" stroke="#EF7D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M7 3V21" stroke="#EF7D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M20.4 18.9002C20.6 19.4002 20.3 20.0002 19.8 20.2002L17.9 20.9002C17.4 21.1002 16.8 20.8002 16.6 20.3002L11.1 5.10024C10.9 4.60024 11.2 4.00024 11.7 3.80024L13.6 3.10024C14.1 2.90024 14.7 3.20024 14.9 3.70024L20.4 18.9002Z" stroke="#EF7D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>';


  $iconPonta = '
  <svg xmlns="http://www.w3.org/2000/svg" width="24" <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
    <path d="M2 20H22" stroke="#EF7D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M9 10L11 12L15 8" stroke="#EF7D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M19 4H5C3.89543 4 3 4.89543 3 6V14C3 15.1046 3.89543 16 5 16H19C20.1046 16 21 15.1046 21 14V6C21 4.89543 20.1046 4 19 4Z" stroke="#EF7D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>';

  $iconDocente = '
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
    <path d="M19 21L12 17L5 21V5C5 4.46957 5.21071 3.96086 5.58579 3.58579C5.96086 3.21071 6.46957 3 7 3H17C17.5304 3 18.0391 3.21071 18.4142 3.58579C18.7893 3.96086 19 4.46957 19 5V21Z" stroke="#EF7D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M9 10L11 12L15 8" stroke="#EF7D00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>';


  $iconBorracha = '
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
    <path d="M6.99995 21.0002L2.69995 16.7002C1.69995 15.7002 1.69995 14.2002 2.69995 13.3002L12.3 3.7002C13.3 2.7002 14.8 2.7002 15.7 3.7002L21.2999 9.3002C22.2999 10.3002 22.2999 11.8002 21.2999 12.7002L13 21.0002" stroke="#747D8C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M22 21H7" stroke="#747D8C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M5 11L14 20" stroke="#747D8C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>';

  $iconMap = '
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M20 10C20 14.993 14.461 20.193 12.601 21.799C12.4277 21.9293 12.2168 21.9998 12 21.9998C11.7832 21.9998 11.5723 21.9293 11.399 21.799C9.539 20.193 4 14.993 4 10C4 7.87827 4.84285 5.84344 6.34315 4.34315C7.84344 2.84285 9.87827 2 12 2C14.1217 2 16.1566 2.84285 17.6569 4.34315C19.1571 5.84344 20 7.87827 20 10Z" stroke="#747D8C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#747D8C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>';

  $iconFind = '
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
    <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="#747D8C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M21 21.0002L16.7 16.7002" stroke="#747D8C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>';

  $arrowLeftTop10 = '
  <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 72 72" fill="none">
  <g opacity="1">
    <path d="M36 66C52.5685 66 66 52.5685 66 36C66 19.4315 52.5685 6 36 6C19.4315 6 6 19.4315 6 36C6 52.5685 19.4315 66 36 66Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M42 48L30 36L42 24" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
</svg>';

  $arrowRightTop10 = '
  <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 72 72" fill="none">
  <g opacity="1">
  <path d="M36 66C52.5685 66 66 52.5685 66 36C66 19.4315 52.5685 6 36 6C19.4315 6 6 19.4315 6 36C6 52.5685 19.4315 66 36 66Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M30 24L42 36L30 48" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
</svg>'
?>