<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>
<body>
<div class="grid-container">


    <div class="container">
        <div class="app-container" data-theme="dark">
          <div class="app-top-bar">
            <button class="button button-small">
              <i class="fas fa-chevron-left"></i>
            </button>
            <h1 class="app-heading"> Temperature</h1>
          </div>
          <div class="app-content">
            <div class="button button-dial">

              <span class="button-dial-spoke"></span>
              <span class="button-dial-spoke"></span>
              <span class="button-dial-spoke"></span>
              <span class="button-dial-spoke"></span>
              <span class="button-dial-spoke"></span>
              <span class="button-dial-spoke"></span>

              <div class="button-dial-top"></div>
              @if ($data->temperature<=28)
                   <div class="button-dial-label">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 125" enable-background="new 0 0 100 100" xml:space="preserve"><g><path d="M60.333,68.349V11.111C60.333,4.984,55.349,0,49.222,0c-6.126,0-11.111,4.984-11.111,11.111v57.237   c-4.15,3.323-6.667,8.397-6.667,13.874c0,9.802,7.975,17.777,17.777,17.777C59.024,100,67,92.024,67,82.223   C67,76.746,64.482,71.672,60.333,68.349z M44.778,48.363h4.444v-4.444h-4.444V35.03h4.444v-4.444h-4.444v-8.889h4.444v-4.444   h-4.444v-6.142c0-2.455,1.99-4.444,4.444-4.444c2.455,0,4.445,1.989,4.445,4.444v41.111h-8.889V48.363z"/></g></svg>
                {{ $data->temperature }}&deg;C
              </div>
              @else
              <div class="button-dial-label-red">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 125" enable-background="new 0 0 100 100" xml:space="preserve"><g><path d="M60.333,68.349V11.111C60.333,4.984,55.349,0,49.222,0c-6.126,0-11.111,4.984-11.111,11.111v57.237   c-4.15,3.323-6.667,8.397-6.667,13.874c0,9.802,7.975,17.777,17.777,17.777C59.024,100,67,92.024,67,82.223   C67,76.746,64.482,71.672,60.333,68.349z M44.778,48.363h4.444v-4.444h-4.444V35.03h4.444v-4.444h-4.444v-8.889h4.444v-4.444   h-4.444v-6.142c0-2.455,1.99-4.444,4.444-4.444c2.455,0,4.445,1.989,4.445,4.444v41.111h-8.889V48.363z"/></g></svg>
                {{ $data->temperature }}&deg;C
              </div>

              @endif

            </div>
          </div>
        </div>
      </div>

                                                          <!--           Humidity             -->
      <div class="container">
        <div class="app-container" data-theme="dark">
          <div class="app-top-bar">
            <button class="button button-small">
              <i class="fas fa-chevron-left"></i>
            </button>
            <h1 class="app-heading"> Humidity</h1>
          </div>
          <div class="app-content">
            <div class="button button-dial">

              <span class="button-dial-spoke"></span>
              <span class="button-dial-spoke"></span>
              <span class="button-dial-spoke"></span>
              <span class="button-dial-spoke"></span>
              <span class="button-dial-spoke"></span>
              <span class="button-dial-spoke"></span>

              <div class="button-dial-top"></div>
             @if ($data->humidity<=50)
             <div class="button-dial-label">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 328.611 328.611;" xml:space="preserve" width="100" height="100"><g><path d="M63.694 15.458a2.282 2.282 0 0 0 -3.679 2.703c16.608 22.6 20.094 37.595 20.094 46.194 0 8.427 -2.517 16.066 -7.088 21.51 -5.331 6.35 -13.077 9.569 -23.021 9.569 -22.224 0 -30.11 -16.743 -30.11 -31.08 0 -15.893 8.552 -31.415 15.726 -41.639 7.869 -11.213 15.858 -18.689 15.937 -18.763a2.282 2.282 0 0 0 -3.107 -3.344c-0.338 0.314 -8.368 7.82 -16.51 19.404 -7.578 10.781 -16.611 27.225 -16.611 44.341 0 9.453 2.944 18.137 8.288 24.452 6.196 7.322 15.321 11.192 26.386 11.192 11.197 0 20.366 -3.873 26.517 -11.199 5.26 -6.265 8.157 -14.947 8.157 -24.445 0 -16.818 -11.41 -35.873 -20.981 -48.898z"/><path d="m60.384 45.082 -28.959 28.959a2.282 2.282 0 0 0 1.614 3.896 2.276 2.276 0 0 0 1.614 -0.669l28.959 -28.959a2.282 2.282 0 0 0 0 -3.228 2.283 2.283 0 0 0 -3.228 0z"/><path d="M58.417 63.266c-4.045 0 -7.336 3.291 -7.336 7.336s3.291 7.336 7.336 7.336 7.336 -3.291 7.336 -7.336 -3.291 -7.336 -7.336 -7.336zm0 10.107c-1.528 0 -2.771 -1.243 -2.771 -2.771s1.243 -2.771 2.771 -2.771 2.771 1.243 2.771 2.771 -1.243 2.771 -2.771 2.771z"/><path d="M38.093 59.086c4.045 0 7.336 -3.291 7.336 -7.336s-3.291 -7.336 -7.336 -7.336 -7.336 3.291 -7.336 7.336 3.291 7.336 7.336 7.336zm0 -10.107c1.528 0 2.771 1.243 2.771 2.771s-1.243 2.771 -2.771 2.771 -2.771 -1.243 -2.771 -2.771 1.243 -2.771 2.771 -2.771z"/></g></svg>
                {{ $data->humidity }}  %
              </div>
             @else
             <div class="button-dial-label-red">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 328.611 328.611;" xml:space="preserve" width="100" height="100"><g><path d="M63.694 15.458a2.282 2.282 0 0 0 -3.679 2.703c16.608 22.6 20.094 37.595 20.094 46.194 0 8.427 -2.517 16.066 -7.088 21.51 -5.331 6.35 -13.077 9.569 -23.021 9.569 -22.224 0 -30.11 -16.743 -30.11 -31.08 0 -15.893 8.552 -31.415 15.726 -41.639 7.869 -11.213 15.858 -18.689 15.937 -18.763a2.282 2.282 0 0 0 -3.107 -3.344c-0.338 0.314 -8.368 7.82 -16.51 19.404 -7.578 10.781 -16.611 27.225 -16.611 44.341 0 9.453 2.944 18.137 8.288 24.452 6.196 7.322 15.321 11.192 26.386 11.192 11.197 0 20.366 -3.873 26.517 -11.199 5.26 -6.265 8.157 -14.947 8.157 -24.445 0 -16.818 -11.41 -35.873 -20.981 -48.898z"/><path d="m60.384 45.082 -28.959 28.959a2.282 2.282 0 0 0 1.614 3.896 2.276 2.276 0 0 0 1.614 -0.669l28.959 -28.959a2.282 2.282 0 0 0 0 -3.228 2.283 2.283 0 0 0 -3.228 0z"/><path d="M58.417 63.266c-4.045 0 -7.336 3.291 -7.336 7.336s3.291 7.336 7.336 7.336 7.336 -3.291 7.336 -7.336 -3.291 -7.336 -7.336 -7.336zm0 10.107c-1.528 0 -2.771 -1.243 -2.771 -2.771s1.243 -2.771 2.771 -2.771 2.771 1.243 2.771 2.771 -1.243 2.771 -2.771 2.771z"/><path d="M38.093 59.086c4.045 0 7.336 -3.291 7.336 -7.336s-3.291 -7.336 -7.336 -7.336 -7.336 3.291 -7.336 7.336 3.291 7.336 7.336 7.336zm0 -10.107c1.528 0 2.771 1.243 2.771 2.771s-1.243 2.771 -2.771 2.771 -2.771 -1.243 -2.771 -2.771 1.243 -2.771 2.771 -2.771z"/></g></svg>
                {{ $data->humidity }}  %
              </div>
             @endif
            </div>
          </div>
        </div>
      </div>



                                   <!--           Soil              -->

      <div class="container">
        <div class="app-container" data-theme="dark">
          <div class="app-top-bar">
            <button class="button button-small">
              <i class="fas fa-chevron-left"></i>
            </button>
            <h1 class="app-heading"> Soil</h1>
          </div>
          <div class="app-content">
            <div class="button button-dial">

              <span class="button-dial-spoke"></span>
              <span class="button-dial-spoke"></span>
              <span class="button-dial-spoke"></span>
              <span class="button-dial-spoke"></span>
              <span class="button-dial-spoke"></span>
              <span class="button-dial-spoke"></span>

              <div class="button-dial-top"></div>
              @if ($data->soil<=250)
              <div class="button-dial-label">
                <svg width="100px" height="100px" viewBox="0 0 100 100" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1 {
                    fill: none;
                  }</styl></defs><path d="M34.375 50v-15.625h3.125a12.516 12.516 0 0 0 12.5 -12.5V12.5h-9.375a12.431 12.431 0 0 0 -8.584 3.459A18.759 18.759 0 0 0 15.625 6.25H6.25v9.375a18.772 18.772 0 0 0 18.75 18.75h3.125v15.625H6.25v6.25h43.75v-6.25Zm6.25 -31.25h3.125v3.125a6.256 6.256 0 0 1 -6.25 6.25h-3.125V25a6.256 6.256 0 0 1 6.25 -6.25ZM25 28.125a12.516 12.516 0 0 1 -12.5 -12.5V12.5h3.125a12.516 12.516 0 0 1 12.5 12.5v3.125Z"/><path x="2" y="21" width="14" height="2" d="M6.25 65.625H50V71.875H6.25V65.625z"/><path x="2" y="26" width="14" height="2" d="M6.25 81.25H50V87.5H6.25V81.25z"/><path d="M78.125 93.75a15.581 15.581 0 0 1 -9.375 -28.063V46.875a9.375 9.375 0 0 1 18.75 0v18.813A15.581 15.581 0 0 1 78.125 93.75Zm0 -50a3.128 3.128 0 0 0 -3.125 3.125v22.281l-1.553 0.906A9.275 9.275 0 0 0 68.75 78.125a9.375 9.375 0 0 0 18.75 0 9.275 9.275 0 0 0 -4.697 -8.066L81.25 69.156V46.875a3.128 3.128 0 0 0 -3.125 -3.125Z"/><path id="_Transparent_Rectangle_" data-name="&amp;lt;Transparent Rectangle&amp;gt;" class="cls-1" width="32" height="32" d="M0 0H100V100H0V0z"/></svg>
                {{ $data->soil }} %
              </div>
              @else
              <div class="button-dial-label-red">
                <svg width="100px" height="100px" viewBox="0 0 100 100" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1 {
                    fill: none;
                  }</style></defs><path d="M34.375 50v-15.625h3.125a12.516 12.516 0 0 0 12.5 -12.5V12.5h-9.375a12.431 12.431 0 0 0 -8.584 3.459A18.759 18.759 0 0 0 15.625 6.25H6.25v9.375a18.772 18.772 0 0 0 18.75 18.75h3.125v15.625H6.25v6.25h43.75v-6.25Zm6.25 -31.25h3.125v3.125a6.256 6.256 0 0 1 -6.25 6.25h-3.125V25a6.256 6.256 0 0 1 6.25 -6.25ZM25 28.125a12.516 12.516 0 0 1 -12.5 -12.5V12.5h3.125a12.516 12.516 0 0 1 12.5 12.5v3.125Z"/><path x="2" y="21" width="14" height="2" d="M6.25 65.625H50V71.875H6.25V65.625z"/><path x="2" y="26" width="14" height="2" d="M6.25 81.25H50V87.5H6.25V81.25z"/><path d="M78.125 93.75a15.581 15.581 0 0 1 -9.375 -28.063V46.875a9.375 9.375 0 0 1 18.75 0v18.813A15.581 15.581 0 0 1 78.125 93.75Zm0 -50a3.128 3.128 0 0 0 -3.125 3.125v22.281l-1.553 0.906A9.275 9.275 0 0 0 68.75 78.125a9.375 9.375 0 0 0 18.75 0 9.275 9.275 0 0 0 -4.697 -8.066L81.25 69.156V46.875a3.128 3.128 0 0 0 -3.125 -3.125Z"/><path id="_Transparent_Rectangle_" data-name="&amp;lt;Transparent Rectangle&amp;gt;" class="cls-1" width="32" height="32" d="M0 0H100V100H0V0z"/></svg>
                {{ $data->soil }} %
              </div>
              @endif
            </div>
          </div>
        </div>
      </div>


                                                  <!--           Light             -->


      <div class="container">
        <div class="app-container" data-theme="dark">
          <div class="app-top-bar">
            <button class="button button-small">
              <i class="fas fa-chevron-left"></i>
            </button>
            <h1 class="app-heading"> Light</h1>
          </div>
          <div class="app-content">
            <div class="button button-dial">

              <span class="button-dial-spoke"></span>
              <span class="button-dial-spoke"></span>
              <span class="button-dial-spoke"></span>
              <span class="button-dial-spoke"></span>
              <span class="button-dial-spoke"></span>
              <span class="button-dial-spoke"></span>

              <div class="button-dial-top"></div>
             @if ($data->light<70)
             <div class="button-dial-label-red">
                <svg width="100" height="100" viewBox="0 0 2 2" xmlns="http://www.w3.org/2000/svg"><g/><path d="M1.67 0.7a0.67 0.67 0 1 0 -1.08 0.53 0.18 0.18 0 0 1 0.01 0.01 0.36 0.36 0 0 1 0.13 0.26v0.47h0.53V1.5c0 -0.13 0.08 -0.23 0.13 -0.27A0.66 0.66 0 0 0 1.66 0.7zm-0.87 1.2v-0.2h0.4v0.2H0.8zM1 0.77a0.07 0.07 0 0 1 0 -0.13 0.07 0.07 0 0 1 0 0.13zm0.36 0.41A0.41 0.41 0 0 0 1.2 1.5v0.13H1.03v-0.8A0.13 0.13 0 0 0 1 0.57 0.13 0.13 0 0 0 0.87 0.7a0.138 0.138 0 0 0 0.1 0.13v0.8H0.8V1.5A0.4 0.4 0 0 0 0.65 1.19 0.92 0.92 0 0 0 0.64 1.18 0.6 0.6 0 0 1 1 0.1a0.6 0.6 0 0 1 0.6 0.6 0.61 0.61 0 0 1 -0.24 0.48z"/></svg>
                {{ $data->light }} ux
              </div>
             @else
             <div class="button-dial-label">
                <svg width="100" height="100" viewBox="0 0 2 2" xmlns="http://www.w3.org/2000/svg"><g/><path d="M1.67 0.7a0.67 0.67 0 1 0 -1.08 0.53 0.18 0.18 0 0 1 0.01 0.01 0.36 0.36 0 0 1 0.13 0.26v0.47h0.53V1.5c0 -0.13 0.08 -0.23 0.13 -0.27A0.66 0.66 0 0 0 1.66 0.7zm-0.87 1.2v-0.2h0.4v0.2H0.8zM1 0.77a0.07 0.07 0 0 1 0 -0.13 0.07 0.07 0 0 1 0 0.13zm0.36 0.41A0.41 0.41 0 0 0 1.2 1.5v0.13H1.03v-0.8A0.13 0.13 0 0 0 1 0.57 0.13 0.13 0 0 0 0.87 0.7a0.138 0.138 0 0 0 0.1 0.13v0.8H0.8V1.5A0.4 0.4 0 0 0 0.65 1.19 0.92 0.92 0 0 0 0.64 1.18 0.6 0.6 0 0 1 1 0.1a0.6 0.6 0 0 1 0.6 0.6 0.61 0.61 0 0 1 -0.24 0.48z"/></svg>
                {{ $data->light }} ux
              </div>
             @endif
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
