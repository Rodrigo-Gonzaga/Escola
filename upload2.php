<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://cdn.tailwindcss.com"></script>
      <title>Upload 1</title>
  </head>
  <body>
    
        <div class="py-12 px-4 flex justify-center items-center w-full">
            <div class="flex-col flex justify-center items-center 2xl:w-4/12 bg-white shadow rounded-lg p-6 sm:p-8">
                <p class="text-base font-semibold leading-none text-center text-gray-800">Envie seu Curriculo</p>
                <p class="mt-3 text-sm leading-5 text-center text-gray-600">Clique em procurar arquivos ou apenas arraste e solte seus arquivos nesta área.</p>
                <div class="space-y-4 mt-6 hover:bg-gray-50 cursor-pointer border-dashed border-2 w-full py-6 flex justify-center items-center flex-col rounded-lg border-gray-400">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M28 20V25.3333C28 26.0406 27.719 26.7189 27.219 27.219C26.7189 27.719 26.0406 28 25.3333 28H6.66667C5.95942 28 5.28115 27.719 4.78105 27.219C4.28095 26.7189 4 26.0406 4 25.3333V20" stroke="#1F2937" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M22.6654 10.6667L15.9987 4L9.33203 10.6667" stroke="#1F2937" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M16 4V20" stroke="#1F2937" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="w-44 text-sm leading-4 text-gray-800">Arraste e solte seus arquivos aqui</p>
                    <p class="text-sm leading-4 text-gray-600">OU</p>
                    <input type="file" id="upload1" hidden />
                    <label class="py-3 px-6 cursor-pointer text-center bg-blue-700 hover:bg-blue-600 focus:bg-blue-800 rounded text-sm leading-4 text-white" for="upload1">Procurar Arquivos</label>
                </div>
                <div class="mt-6 flex-col flex justify-start items-start w-full">
                    <p class="text-sm font-medium leading-4 text-gray-600">Arquivos enviados</p>
                    <div id="mainDiv" class="mt-4 flex justify-start items-center hover:shadow-md rounded-md transition ease-in-out duration-400 p-4 w-full space-x-4">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 0C8.625 0 7.5 1.125 7.5 2.5V37.5C7.5 38.875 8.625 40 10 40H35C36.375 40 37.5 38.875 37.5 37.5V10L27.5 0H10Z" fill="#E5E7EB" />
                            <path d="M30 10H37.5L27.5 0V7.5C27.5 8.875 28.625 10 30 10Z" fill="#D1D5DB" />
                            <path d="M37.5 17.5L30 10H37.5V17.5Z" fill="#E5E7EB" />
                            <path d="M32.5 32.5C32.5 33.1875 31.9375 33.75 31.25 33.75H3.75C3.0625 33.75 2.5 33.1875 2.5 32.5V20C2.5 19.3125 3.0625 18.75 3.75 18.75H31.25C31.9375 18.75 32.5 19.3125 32.5 20V32.5Z" fill="#DC2626" />
                            <path d="M7.94922 23.6841C7.94922 23.3541 8.20922 22.9941 8.62797 22.9941H10.9367C12.2367 22.9941 13.4067 23.8641 13.4067 25.5316C13.4067 27.1116 12.2367 27.9916 10.9367 27.9916H9.26797V29.3116C9.26797 29.7516 8.98797 30.0004 8.62797 30.0004C8.29797 30.0004 7.94922 29.7516 7.94922 29.3116V23.6841ZM9.26797 24.2529V26.7429H10.9367C11.6067 26.7429 12.1367 26.1516 12.1367 25.5316C12.1367 24.8329 11.6067 24.2529 10.9367 24.2529H9.26797Z" fill="white" />
                            <path d="M15.3658 30.0002C15.0358 30.0002 14.6758 29.8202 14.6758 29.3815V23.704C14.6758 23.3452 15.0358 23.084 15.3658 23.084H17.6545C22.222 23.084 22.122 30.0002 17.7445 30.0002H15.3658ZM15.9958 24.304V28.7815H17.6545C20.3533 28.7815 20.4733 24.304 17.6545 24.304H15.9958Z" fill="white" />
                            <path d="M23.7411 24.3843V25.973H26.2898C26.6498 25.973 27.0098 26.333 27.0098 26.6818C27.0098 27.0118 26.6498 27.2818 26.2898 27.2818H23.7411V29.3805C23.7411 29.7305 23.4923 29.9993 23.1423 29.9993C22.7023 29.9993 22.4336 29.7305 22.4336 29.3805V23.703C22.4336 23.3443 22.7036 23.083 23.1423 23.083H26.6511C27.0911 23.083 27.3511 23.3443 27.3511 23.703C27.3511 24.023 27.0911 24.383 26.6511 24.383H23.7411V24.3843Z" fill="white" />
                            <path d="M31.25 33.75H7.5V35H31.25C31.9375 35 32.5 34.4375 32.5 33.75V32.5C32.5 33.1875 31.9375 33.75 31.25 33.75Z" fill="#E5E7EB" />
                        </svg>
                        <div class="flex justify-start w-full flex-col">
                            <div class="flex justify-between items-center w-full">
                                <p class="text-sm font-medium leading-4 text-gray-800"></p>
                                <p id="percentage" class="text-xs leading-3 text-gray-600"><span id="text">80</span>%</p>
                            </div>
                            <div id="bar" class="mt-4 h-1 w-full bg-gray-100 rounded-full">
                                <div id="loadingBar" class="h-full rounded-full w-full bg-blue-700"></div>
                            </div>
                            <div id="mb" class="mt-2">
                                <p class="text-xs leading-3 text-gray-600">8.56 MB</p>
                            </div>
                            <div id="mb2" class="mt-2 hidden">
                                <p class="text-xs leading-3 text-gray-600">2.56 MB - Uploading Error</p>
                            </div>
                        </div>
                        <button id="cross" onclick="failbtn(true)" class="rounded-full p-1 bg-gray-100">
                            <svg class="w-4" width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.25 4.25L3.75 11.75" stroke="#4B5563" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.75 4.25L11.25 11.75" stroke="#4B5563" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button id="success" onclick="letsGOAgain(true)" class="hidden rounded-full p-1 bg-green-100">
                            <svg class="" width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99694 2.71779C10.1528 2.85417 10.1686 3.09108 10.0322 3.24694L4.78222 9.24695C4.71387 9.32505 4.61621 9.37134 4.51248 9.3748C4.40875 9.37825 4.30822 9.33856 4.23483 9.26517L1.98483 7.01517C1.83839 6.86872 1.83839 6.63129 1.98483 6.48484C2.13128 6.33839 2.36872 6.33839 2.51516 6.48484L4.48173 8.45141L9.46778 2.75307C9.60416 2.5972 9.84107 2.58141 9.99694 2.71779Z" fill="#059669" />
                            </svg>
                        </button>
                        <button id="fail" onclick="failbtn(true)" class="hidden rounded-full p-1.5 bg-red-100">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M5.62477 1.125C6.28423 1.12421 6.93695 1.2576 7.54323 1.51704C8.14959 1.77651 8.69681 2.15665 9.15159 2.63431L9.15816 2.64122L9.65938 3.22431C9.79438 3.38136 9.7765 3.61813 9.61945 3.75313C9.46239 3.88814 9.22563 3.87026 9.09062 3.7132L8.60197 3.14473C8.21863 2.74392 7.75813 2.42478 7.24817 2.20656C6.73536 1.98712 6.18326 1.87431 5.62547 1.875L5.62523 1.875H5.625C3.34773 1.875 1.5 3.72274 1.5 6C1.5 8.27726 3.34772 10.125 5.62497 10.125M5.62477 1.125C2.93339 1.12513 0.75 3.3086 0.75 6C0.75 8.69149 2.93352 10.875 5.625 10.875H5.62503C6.63325 10.8749 7.61668 10.5624 8.43997 9.98041C9.26326 9.39842 9.88595 8.57557 10.2223 7.62512C10.2914 7.42988 10.1892 7.21559 9.99395 7.14649C9.79871 7.07739 9.58442 7.17965 9.51532 7.37489C9.23066 8.17918 8.70373 8.87549 8.00704 9.36798C7.31036 9.86047 6.47817 10.1249 5.625 10.125"
                                    fill="#DC2626"
                                />
                                <path d="M10.8739 2.28333V4.87505C10.8739 4.97451 10.8344 5.06989 10.764 5.14021C10.6937 5.21054 10.5983 5.25005 10.4989 5.25005H7.90715C7.57293 5.25005 7.40558 4.84622 7.64183 4.60997L10.2338 2.01802C10.47 1.7813 10.8739 1.94911 10.8739 2.28333Z" fill="#DC2626" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <script>
            var startPercentage = () => {
                var width = 0;
                var bar = document.getElementById("loadingBar");
                var text = document.getElementById("text");
                var cross = document.getElementById("cross");
                var success = document.getElementById("success");
                var fail = document.getElementById("fail");
                var mainbar = document.getElementById("bar");
                var mb = document.getElementById("mb");
                var mb2 = document.getElementById("mb2");
                var percentage = document.getElementById("percentage");
                var mainDiv = document.getElementById("mainDiv");

                var start2 = setInterval(() => {
                    if (width < 100) {
                        width++;
                        bar.style.width = width + "%";
                        text.innerHTML = width;
                        clearInterval(start);
                        failbtn = (flag) => {
                            if (flag) {
                                cross.classList.toggle("hidden");
                                fail.classList.toggle("hidden");
                                mb2.classList.toggle("hidden");
                                mb.classList.toggle("hidden");
                                percentage.classList.toggle("hidden");
                                mainbar.classList.toggle("hidden");
                                mainDiv.classList.remove("bg-white");
                                mainDiv.classList.toggle("bg-red-50");
                                width = 0;
                                return;
                            }
                        };
                    } else {
                        letsGOAgain = (flag) => {
                            if (flag) {
                                width = 0;
                                mainbar.classList.remove("hidden");
                                mainDiv.classList.remove("bg-red-50");
                                success.classList.add("hidden");
                                cross.classList.remove("hidden");
                                mb.classList.remove("hidden");
                                percentage.classList.remove("hidden");
                            }
                        };
                        cross.classList.add("hidden");
                        success.classList.remove("hidden");
                        mainbar.classList.add("hidden");
                        mb.classList.add("hidden");
                        percentage.classList.add("hidden");
                        return;
                    }
                }, 100);
            };
            const start = setInterval(startPercentage, 1000);
        </script>
    
  </body>
</html>