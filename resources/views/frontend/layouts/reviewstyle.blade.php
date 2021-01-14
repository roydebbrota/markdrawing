{{-- for rating only --}}

<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
    body { background-color:#fafafa;}
    .content {
      text-align: center;
      margin-top:150px;
    }
    .content h1 {
      font-family: 'Sansita', sans-serif;
      letter-spacing: 1px;
      font-size: 50px;
      color: #282828;
      margin-bottom: 10px;
    }
    .content  i {
      color: #FFC107;
    }
    .content span {
      position: relative;
      display: inline-block;
    }
    .content  span:before, .content  span:after {
      position: absolute;
      content: "";
      background-color: #282828;
      width: 40px;
      height: 2px;
      top: 40%;
    }
    .content  span:before {
      left: -45px;
    }
    .content  span:after {
      right: -45px;
    }
    .content p {
      font-family: 'Open Sans', sans-serif;
      font-size: 18px;
      letter-spacing: 1px;
    }
    .wrapper {
      position: relative;
      display: inline-block;
      border: none;
      font-size: 14px;
      margin-top: 5px;
      /*margin: 50px auto;
      left: 50%;
      transform: translateX(-50%);*/
    }

    .wrapper input {
      border: 0;
      width: 1px;
      height: 1px;
      overflow: hidden;
      position: absolute !important;
      clip: rect(1px 1px 1px 1px);
      clip: rect(1px, 1px, 1px, 1px);
      opacity: 0;
    }

    .wrapper label {
      position: relative;
      float: right;
      color: #C8C8C8;
    }

    .wrapper label:before {
      margin: 5px;
      content: "\f005";
      font-family: FontAwesome;
      display: inline-block;
      font-size: 1.5em;
      color: #ccc;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    .wrapper input:checked ~ label:before {
      color: #FFC107;
    }

    .wrapper label:hover ~ label:before {
      color: #ffdb70;
    }

    .wrapper label:hover:before {
      color: #FFC107;
    }

    .rating-title {
    align-items: center;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    }

    .rating {
      display: contents !important;
    }
</style>
