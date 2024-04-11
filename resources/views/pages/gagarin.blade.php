@extends('layout')
@section('title', 'Тяга к знаниям двигает нас к звёздам')

@section('content')

    <x-header image="/img/ui/vostok/vostok2.svg">
        <x-slot:sup>Тяга к знаниям двигает нас к звёздам</x-slot>
        <x-slot:title>С Днём Космонавтики!</x-slot>

        <x-slot:description>
            Пусть эта дата вдохновляет нас на новые открытия и смелые шаги в неизведанные просторы Вселенной.
        </x-slot>
    </x-header>


    <x-container>

        <div class="mt-5 position-relative overflow-visible">
        <figure class="position-absolute top-50 start-0 translate-middle z-n1 ms-4 mt-5">
            <img src="/img/ui/vostok/satellite.svg" width="240" height="240">
        </figure>

        <div class="gagarin col-xl-8 col-md-12 mx-auto">

            <div class="bg-body-tertiary mb-4 p-4 p-xl-5 rounded">

                    <div id="message" class="h2 text-center mb-4 mb-xl-5">Преодолей препятствия и получи доступ к знаниям!</div>

                    <div class="position-relative overflow-hidden p-4 rounded d-flex align-items-center justify-content-center">

                        <div style="background-image: url(/img/gagarin/space.jpg);background-size: cover; animation: rotation-space 300s infinite linear; position: absolute; bottom: -50%; top: -50%; left: -50%; right: -50%"></div>

                        <svg id="gameSVG" width="600" height="600"></svg>
                        <div id="start-placeholder"
                             class="position-absolute top-0 bottom-0 start-0 end-0 d-flex align-items-center justify-content-center bg-dark bg-opacity-50 rounded">
                            <button class="btn btn-primary" type="button" onclick="start()">Поехали!</button>
                        </div>
                    </div>

                    <div class="stats d-flex align-items-baseline gap-3 mt-2 mt-xl-3 h3 mb-0">
                        <small class="opacity-50">Очки:</small>
                        <strong id="timer" data-timer="0">0</strong>
                    </div>


                <div class="d-none">
                    <svg xmlns="http://www.w3.org/2000/svg" id="ship" style="background-color: blue"
                         xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                         viewBox="0 0 100 125" enable-background="new 0 0 100 100" xml:space="preserve">
  <defs>
      <clipPath id="shipClipPath">
          <path fill="#fff"
                d="M91.069,23.393c-1.727-3.984-5.647-6.559-9.99-6.559c-1.489,0-2.942,0.302-4.319,0.898   c-1.553,0.673-2.859,1.674-3.896,2.877l-63.69,9.915c-0.58,0.09-0.977,0.634-0.887,1.214c0.082,0.524,0.534,0.899,1.049,0.899   c0.055,0,0.109-0.004,0.165-0.013l61.792-9.619c-0.427,0.888-0.738,1.829-0.913,2.802L40.339,37.611   c-0.546,0.214-0.815,0.832-0.601,1.378c0.165,0.419,0.565,0.675,0.99,0.675c0.129,0,0.261-0.024,0.388-0.074l29.107-11.437   c0.051,1.305,0.327,2.621,0.877,3.889c0.521,1.203,1.245,2.275,2.117,3.188L22.21,81.472c-0.435,0.394-0.468,1.066-0.074,1.501   c0.21,0.231,0.499,0.35,0.788,0.35c0.254,0,0.51-0.092,0.713-0.276l51.207-46.421c1.794,1.257,3.959,1.976,6.244,1.976   c0.814,0,1.617-0.099,2.403-0.279l-28.43,32.614c-0.386,0.442-0.339,1.113,0.104,1.5c0.201,0.175,0.45,0.262,0.698,0.262   c0.296,0,0.591-0.124,0.802-0.365l32.251-36.997c0.043-0.05,0.062-0.11,0.094-0.165c0.93-0.989,1.678-2.15,2.191-3.451   C92.271,29.017,92.224,26.06,91.069,23.393z M73.052,31.197c-1.06-2.445-0.906-5.112,0.184-7.335   c0.231,0.871,0.523,1.728,0.885,2.562c0.804,1.855,1.913,3.553,3.267,5.027l-2.579,2.338   C74.088,33.045,73.479,32.183,73.052,31.197z M76.476,35.146l2.442-2.215c0.327,0.28,0.662,0.552,1.009,0.808   c1.255,0.927,2.617,1.659,4.052,2.23c-0.933,0.329-1.9,0.504-2.89,0.504C79.42,36.474,77.834,35.99,76.476,35.146z M89.226,30.938   c-0.576,1.457-1.517,2.698-2.716,3.643c-1.924-0.519-3.716-1.365-5.319-2.55c-0.233-0.172-0.459-0.355-0.682-0.54l2.431-2.204   c0.435-0.395,0.468-1.066,0.073-1.501c-0.395-0.436-1.067-0.468-1.501-0.074l-2.55,2.312c-1.198-1.303-2.18-2.804-2.891-4.445   c-0.443-1.022-0.774-2.081-0.994-3.161l3.136-0.488c0.58-0.09,0.978-0.634,0.888-1.214c-0.091-0.58-0.637-0.981-1.214-0.887   l-0.837,0.13c0.183-0.095,0.364-0.192,0.556-0.275c1.108-0.48,2.277-0.724,3.474-0.724c3.495,0,6.65,2.072,8.039,5.277   C90.048,26.383,90.086,28.763,89.226,30.938z"/>
          <path
              fill="#fff"
              d="M87.368,25.768c-0.58,0.091-0.976,0.636-0.884,1.216c0.053,0.335,0.074,0.68,0.063,1.023   c-0.019,0.587,0.442,1.077,1.029,1.096c0.012,0,0.022,0,0.034,0c0.571,0,1.044-0.454,1.062-1.03   c0.015-0.476-0.015-0.954-0.089-1.421C88.493,26.073,87.961,25.675,87.368,25.768z"/>
          <path
              fill="#fff"
              d="M87.316,23.47c-1.291-1.875-3.337-3.075-5.611-3.29c-0.596-0.058-1.104,0.374-1.159,0.958   c-0.055,0.584,0.374,1.103,0.958,1.158c1.647,0.156,3.128,1.023,4.062,2.38c0.206,0.299,0.538,0.46,0.876,0.46   c0.208,0,0.418-0.061,0.602-0.188C87.528,24.616,87.649,23.954,87.316,23.47z"/>
      </clipPath>

      <radialGradient id="grad" cx="50%" cy="50%" r="50%" fx="50%" fy="50%">
          <stop offset="75%" style="stop-color:#171717"/>
          <stop offset="100%" style="stop-color:rgba(255,150,113,0.8)"/>
      </radialGradient>
  </defs>
                        <circle cx="50%" cy="50%" r="50%" fill="url(#grad)"/>
                        <rect width="100" height="100" fill="#FFFFFF" clip-path="url(#shipClipPath)"></rect>
</svg>
                    <svg xmlns="http://www.w3.org/2000/svg" id="comet" style="background-color: blue"
                         xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                         viewBox="0 0 100 125" enable-background="new 0 0 100 100" xml:space="preserve">

      <defs>
          <radialGradient id="grad" cx="50%" cy="50%" r="50%" fx="50%" fy="50%">
              <stop offset="0%" style="stop-color:rgba(255,150,113,0.5)"/>
              <stop offset="100%" style="stop-color:#FF9671"/>
          </radialGradient>
          <clipPath id="cometClipPath">
              <path fill="red"
                    d="M21.426,81.134c-0.738-0.135-1.488,0.026-2.106,0.455s-1.033,1.071-1.167,1.812   c-0.099,0.548-0.022,1.096,0.185,1.587c-0.105,0.068-0.21,0.142-0.314,0.228c-0.452,0.374-0.516,1.044-0.141,1.496   c0.21,0.254,0.514,0.386,0.819,0.386c0.239,0,0.479-0.08,0.677-0.245c0.331-0.273,0.717-0.304,0.747-0.306   c0.02,0,0.035-0.011,0.054-0.012c0.381-0.012,0.745-0.225,0.925-0.592c0.258-0.527,0.041-1.164-0.487-1.422   c-0.274-0.135-0.428-0.439-0.373-0.74c0.033-0.181,0.134-0.339,0.286-0.443c0.151-0.105,0.334-0.146,0.515-0.111   c0.181,0.033,0.338,0.135,0.443,0.286s0.145,0.334,0.112,0.513c-0.021,0.117-0.07,0.224-0.145,0.315   c-0.37,0.456-0.3,1.125,0.156,1.495c0.456,0.369,1.125,0.3,1.495-0.157c0.297-0.365,0.499-0.805,0.584-1.271   c0.134-0.74-0.027-1.487-0.456-2.106C22.809,81.683,22.165,81.269,21.426,81.134z"/>
              <path
                  fill="red"
                  d="M30.347,76.853c-0.891-0.65-1.979-0.913-3.069-0.743c-0.58,0.091-0.977,0.635-0.886,1.215   c0.091,0.579,0.638,0.979,1.215,0.885c0.528-0.078,1.055,0.046,1.486,0.361c0.432,0.314,0.715,0.779,0.798,1.308   c0.083,0.528-0.044,1.056-0.358,1.487c-0.315,0.432-0.78,0.716-1.309,0.799c-0.526,0.078-1.056-0.044-1.487-0.36   c-0.431-0.314-0.714-0.778-0.797-1.306c-0.09-0.58-0.631-0.976-1.215-0.886c-0.58,0.091-0.977,0.634-0.886,1.214   c0.17,1.09,0.755,2.047,1.645,2.696c0.713,0.52,1.555,0.792,2.421,0.792c0.215,0,0.431-0.017,0.647-0.051   c1.09-0.171,2.048-0.756,2.697-1.646s0.912-1.98,0.741-3.068C31.821,78.46,31.237,77.503,30.347,76.853z"/>
              <path
                  fill="red"
                  d="M32.567,74.147c-0.64-0.562-1.244-1.095-1.71-1.712c-0.338-0.448-0.468-0.993-0.617-1.625   c-0.154-0.651-0.33-1.391-0.772-2.094c-1.256-2.005-3.821-3.555-6.86-4.145c-3.696-0.712-7.075,0.482-9.509,3.352   c-2.584,3.046-3.804,7.742-3.107,11.964c1.013,6.158,6.438,10.46,13.193,10.46c0,0,0,0,0.001,0c1.545,0,3.063-0.24,4.458-0.697   c3.513-0.947,7.64-3.241,8.686-6.839c0.48-1.651,0.474-4.252-2.284-7.264C33.574,75.035,33.062,74.584,32.567,74.147z    M34.287,82.218c-0.659,2.267-3.484,4.378-7.251,5.396c-1.235,0.403-2.531,0.608-3.851,0.608c0,0,0,0-0.001,0   c-4.656,0-10.114-2.717-11.095-8.68c-0.6-3.632,0.433-7.652,2.63-10.242c0.177-0.209,0.384-0.423,0.604-0.637   c-0.354,0.389-0.383,0.977-0.046,1.384c-1.917,1.458-2.74,4.047-1.874,6.11c0.415,0.989,1.178,1.712,2.145,2.081   c0.015,0.006,0.025,0.02,0.041,0.025c0.016,0.006,0.033,0.008,0.049,0.014c0.038,0.014,0.07,0.036,0.108,0.048   c0.12,0.038,0.245,0.06,0.369,0.086c0.064,0.015,0.126,0.034,0.191,0.045c0.106,0.017,0.215,0.02,0.322,0.028   c0.106,0.009,0.212,0.028,0.319,0.028c0.373,0,0.746-0.062,1.114-0.162c0.059-0.016,0.118-0.024,0.176-0.042   c0.06-0.02,0.117-0.046,0.176-0.066c0.362-0.126,0.722-0.288,1.071-0.506c0.242-0.171,0.749-0.393,0.958-0.335   c0.037,0.009,0.081,0.091,0.099,0.125c0.264,0.524,0.902,0.736,1.427,0.472c0.524-0.264,0.736-0.902,0.472-1.427   c-0.289-0.575-0.683-0.888-1.048-1.066c0-0.001,0-0.001,0.001-0.002c0.595-1.257,0.669-2.646,0.205-3.809   c-0.392-0.979-1.133-1.721-2.089-2.089c-0.548-0.208-1.163,0.061-1.375,0.61c-0.211,0.548,0.062,1.163,0.61,1.374   c0.51,0.196,0.76,0.594,0.879,0.894c0.246,0.616,0.191,1.385-0.153,2.111c-0.306,0.647-0.805,1.16-1.358,1.47   c-0.039,0.021-0.078,0.041-0.118,0.06c-0.083,0.042-0.167,0.078-0.252,0.109c-0.125,0.045-0.251,0.083-0.376,0.106   c-0.017,0.004-0.034,0.009-0.051,0.012c-0.155,0.026-0.308,0.036-0.457,0.029c-0.005-0.001-0.011,0-0.017,0   c-0.101-0.006-0.195-0.031-0.292-0.053c-0.065-0.016-0.132-0.022-0.194-0.047c-0.004-0.002-0.008-0.001-0.012-0.002   c-0.445-0.156-0.786-0.479-0.981-0.945c-0.517-1.229,0.151-2.958,1.388-3.732c0.329-0.171,0.715-0.558,0.814-1.129   c0.104-0.604-0.127-1.219-0.689-1.824c-0.38-0.409-1.003-0.44-1.434-0.098c1.131-1.059,2.797-2.057,5.094-2.057   c0.539,0,1.1,0.056,1.666,0.166c1.908,0.37,4.345,1.401,5.464,3.188c0.256,0.406,0.371,0.892,0.504,1.452   c0.179,0.756,0.382,1.612,0.989,2.417c0.597,0.79,1.312,1.419,2.002,2.027c0.474,0.417,0.922,0.812,1.315,1.24   C34.155,78.816,34.764,80.577,34.287,82.218z"/>
              <path
                  fill="red"
                  d="M93.584,7.094c-0.414-0.411-1.078-0.414-1.493-0.008C91.974,7.201,80.427,18.44,66.588,29.714   c-0.124-0.328-0.252-0.693-0.349-0.968c-0.599-1.711-0.899-2.571-1.869-2.571c-0.349,0-0.758,0.225-0.956,0.51   c-2.916,4.189-8.018,10.111-12.589,13.98c-0.138-0.755-0.28-1.7-0.383-2.38c-0.479-3.176-0.579-3.837-1.648-3.837   c-0.383,0-0.775,0.239-0.964,0.572c-1.762,3.108-7.817,10.565-11.767,14.32c-0.084-0.568-0.162-1.221-0.219-1.706   c-0.292-2.467-0.412-3.489-1.562-3.489c-0.399,0-0.759,0.207-0.985,0.565c-3.799,5.989-7.885,10.302-10.945,13.07   c-0.285-1.018-0.608-2.451-0.707-3.292c0.143-0.36,0.248-0.812-0.033-1.251c-0.348-0.542-1.152-0.66-1.701-0.189   c-0.35,0.302-0.419,0.721-0.422,1.043c-0.798,1.58-3.755,6.3-8,10.543c-3.28,3.28-5.086,7.641-5.086,12.279   c0,4.638,1.807,8.998,5.086,12.278c3.281,3.28,7.642,5.087,12.28,5.087s8.999-1.807,12.279-5.087l0.164-0.165   c1.357-1.362,5.487-5.511,11.426-9.395c0.394-0.257,0.59-0.768,0.456-1.219c-0.24-0.804-1.053-0.804-1.444-0.804   c-0.466,0-1.251,0.039-2.09,0.081c-0.338,0.018-0.694,0.035-1.041,0.051c2.888-2.833,7.245-6.078,13.374-10.399   c0.353-0.249,0.55-0.741,0.452-1.162c-0.203-0.879-0.824-0.979-3.808-1.463c-0.537-0.087-1.262-0.205-1.885-0.321   c3.166-3.338,8.968-8.351,12.251-11.188c0.762-0.657,1.388-1.198,1.815-1.576c0.331-0.292,0.472-0.813,0.315-1.227   c-0.311-0.823-1.159-0.823-2.564-0.823c-0.467,0-0.999,0.008-1.54,0.016c-0.53,0.008-1.069,0.016-1.563,0.016   c4.182-4.755,11.84-11.392,15.706-14.178c0.375-0.27,0.568-0.806,0.427-1.245c-0.264-0.818-1.115-0.818-1.679-0.818   c-0.502,0-1.226,0.034-1.984,0.069c-0.432,0.021-0.874,0.042-1.291,0.057C82.622,19.922,93.483,8.703,93.596,8.587   C94.001,8.17,93.995,7.505,93.584,7.094z M68.646,33.697c-0.257,0.318-0.326,0.831-0.149,1.2c0.357,0.749,1.226,0.749,2.065,0.749   c0.515,0,1.153-0.024,1.8-0.053c-4.773,3.799-11.637,10.011-14.896,14.179c-0.249,0.32-0.308,0.82-0.129,1.185   c0.366,0.75,1.223,0.783,2.971,0.783c0.52,0,1.091-0.008,1.651-0.017c0.14-0.002,0.279-0.004,0.416-0.006   c-3.763,3.252-10.577,9.151-13.387,12.454c-0.249,0.293-0.337,0.769-0.205,1.129c0.302,0.819,1.096,0.978,4.412,1.516   c0.195,0.031,0.405,0.065,0.619,0.101c-6.599,4.696-10.79,7.97-13.479,11.109c-0.27,0.315-0.342,0.799-0.168,1.176   c0.328,0.713,1.114,0.713,1.807,0.713c0.445,0,1.001-0.02,1.592-0.046c-4.556,3.336-7.698,6.49-8.86,7.658l-0.161,0.161   c-2.879,2.879-6.706,4.464-10.776,4.464s-7.897-1.585-10.777-4.464c-2.878-2.878-4.463-6.705-4.463-10.774   c0-4.07,1.585-7.897,4.463-10.775c3.056-3.055,5.497-6.365,7.008-8.721c0.375,1.583,0.989,3.195,1.937,3.195   c0.254,0,0.527-0.102,0.72-0.268c2.911-2.495,7.069-6.597,11.08-12.441c0.341,2.887,0.515,4.336,1.826,4.336   c0.289,0,0.562-0.103,0.792-0.298c3.371-2.865,8.979-9.496,11.93-13.713c0.02,0.128,0.038,0.253,0.056,0.373   c0.584,3.876,0.742,4.918,1.946,4.918c0.238,0,0.513-0.097,0.7-0.243c4.534-3.55,9.813-9.45,13.186-14.004   c0.021,0.061,0.042,0.12,0.062,0.176c0.633,1.806,1.015,2.896,2.066,2.896c0.243,0,0.562-0.115,0.752-0.268   c3.462-2.801,6.796-5.615,9.861-8.272C74.258,26.88,71.446,30.224,68.646,33.697z"/>
              <path
                  fill="red"
                  d="M32.252,57.64c0.312,0,0.62-0.137,0.83-0.399l0.647-0.809c0.367-0.458,0.293-1.127-0.165-1.494   c-0.458-0.364-1.127-0.293-1.494,0.166l-0.647,0.809c-0.367,0.458-0.293,1.127,0.165,1.494   C31.785,57.562,32.019,57.64,32.252,57.64z"/>
              <path
                  fill="red"
                  d="M25.458,63.949c0.264,0,0.529-0.099,0.734-0.295l3.476-3.322c0.424-0.406,0.44-1.079,0.034-1.503   c-0.407-0.425-1.079-0.438-1.503-0.034l-3.476,3.322c-0.424,0.406-0.44,1.079-0.034,1.503   C24.898,63.839,25.178,63.949,25.458,63.949z"/>
              <path
                  fill="red"
                  d="M43.976,67.457l-1.731,1.656c-0.424,0.406-0.439,1.079-0.033,1.503c0.209,0.219,0.488,0.329,0.768,0.329   c0.264,0,0.529-0.099,0.735-0.295l1.731-1.656c0.424-0.406,0.439-1.079,0.033-1.503C45.073,67.066,44.4,67.053,43.976,67.457z"/>
              <path
                  fill="red"
                  d="M39.431,71.805l-2.897,2.771c-0.424,0.406-0.439,1.079-0.033,1.503c0.208,0.219,0.488,0.329,0.768,0.329   c0.264,0,0.529-0.099,0.735-0.295l2.897-2.771c0.424-0.406,0.439-1.079,0.033-1.503C40.53,71.414,39.856,71.4,39.431,71.805z"/>
              <path
                  fill="red"
                  d="M50.008,46.944c-0.405-0.424-1.078-0.439-1.503-0.033L46.28,49.04c-0.424,0.406-0.439,1.079-0.033,1.503   c0.209,0.219,0.488,0.328,0.768,0.328c0.264,0,0.529-0.098,0.735-0.295l2.226-2.129C50.399,48.041,50.414,47.368,50.008,46.944z"/>
              <path
                  fill="red"
                  d="M39.898,57.682c0.264,0,0.529-0.099,0.735-0.296l3.8-3.636c0.424-0.405,0.439-1.078,0.033-1.503   c-0.405-0.423-1.078-0.438-1.503-0.032l-3.8,3.636c-0.424,0.405-0.439,1.078-0.033,1.503   C39.339,57.571,39.619,57.682,39.898,57.682z"/>
              <path
                  fill="red"
                  d="M29.705,66.372c0.209,0.218,0.488,0.328,0.768,0.328c0.264,0,0.529-0.099,0.735-0.296l5.372-5.142   c0.424-0.405,0.439-1.078,0.033-1.503c-0.406-0.423-1.078-0.438-1.503-0.032l-5.372,5.142   C29.313,65.274,29.299,65.947,29.705,66.372z"/>
              <path
                  fill="red"
                  d="M52.065,51.925l-3.971,3.798c-0.424,0.406-0.439,1.079-0.033,1.503c0.208,0.219,0.488,0.329,0.768,0.329   c0.264,0,0.529-0.099,0.735-0.295l3.97-3.798c0.425-0.406,0.439-1.079,0.034-1.503C53.162,51.533,52.487,51.52,52.065,51.925z"/>
              <path
                  fill="red"
                  d="M43.807,61.298c-0.406-0.423-1.078-0.438-1.503-0.032l-9.007,8.619c-0.424,0.405-0.439,1.078-0.033,1.503   c0.209,0.218,0.488,0.328,0.768,0.328c0.264,0,0.529-0.099,0.735-0.296l9.007-8.619C44.198,62.396,44.213,61.723,43.807,61.298z"/>

          </clipPath>
      </defs>
                        <circle cx="50%" cy="50%" r="50%" fill="url(#grad)"/>
                        <rect width="100" height="100" fill="#FFFFFF" clip-path="url(#cometClipPath)"></rect>
</svg>
                </div>


            </div>
        </div>

        </div>



    </x-container>



    <x-container>

        <section class="mb-4 marketing">
            <div class="row align-items-center">
                <div class="col-lg-5 ms-auto my-5">
                    <blockquote class="display-6 fw-semibold mb-4 text-balance">
                        Космос — это наша судьба, наша мечта, наша надежда и наше будущее.
                    </blockquote>

                    <div class="lh-1 fw-normal text-balance">
                        <div class="fw-bolder mb-1">Юрий Гагарин</div>
                        <small class="opacity-50">Первый космонавт</small>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="/img/ui/vostok/gagarin.svg" class="img-fluid d-none d-lg-block mx-auto">
                </div>
            </div>
        </section>

        <div class="row g-4 g-lg-4 g-md-3">

            <div class="col-12 col-lg-8">
                <div class="bg-primary bg-opacity-10 p-4 p-xl-5 rounded position-relative h-100 overflow-hidden">


                    <div class="row h-100">

                        <div class="col-12 col-md-8 col-lg-6 col-xl-6">
                            <div class="d-flex flex-column h-100">

                                <div class="mb-auto">
                                    <p class="h2 mb-3">Как это было</p>

                                    <p>
                                        "Поехали" вместе: как это было. Хроника дня 12 апреля 1961 года в событиях и лицах
                                    </p>

                                    <p>
                                        Lorem ipsum dolor sit amet consectetur. Consequat sed ac in nullam facilisis hac
                                        at orci.Lorem ipsum dolor sit amet consectetur. Consequat sed ac in nullam
                                        facilisis hac at orci.Lorem ipsum dolor sit amet consectetur. Consequat sed ac
                                        in nullam facilisis hac at orci.
                                    </p>
                                </div>


                                <div class="mt-auto">

                                    <p class="opacity-50 mb-2 small">Некоторые компоненты:</p>

                                    <a href="{{ asset('https://orchid.software/ru/docs/field') }}"
                                       class="d-inline-flex link-body-emphasis text-decoration-none mb-1 icon-link icon-link-hover me-3">
                                        Элементы форм
                                        <x-icon path="i.arrow-right" class="bi" />
                                    </a>

                                    <a href="{{ asset('https://orchid.software/ru/docs/table') }}"
                                       class="d-inline-flex link-body-emphasis text-decoration-none mb-1 icon-link icon-link-hover me-3">
                                        Таблицы
                                        <x-icon path="i.arrow-right" class="bi" />
                                    </a>

                                    <a href="{{ asset('https://orchid.software/ru/docs/charts') }}"
                                       class="d-inline-flex link-body-emphasis text-decoration-none mb-1 icon-link icon-link-hover me-3">
                                        Графики
                                        <x-icon path="i.arrow-right" class="bi" />
                                    </a>

                                    <a href="{{ asset('https://orchid.software/ru/docs/modals') }}"
                                       class="d-inline-flex link-body-emphasis text-decoration-none mb-1 icon-link icon-link-hover me-3">
                                        Модальные окна
                                        <x-icon path="i.arrow-right" class="bi" />
                                    </a>

                                </div>
                            </div>
                        </div>

                        <div class="d-none d-md-block col-md-4 col-lg-6 col-xl-6">
                            <img src="/img/ui/vostok/earth.svg" class="img-fluid">
                        </div>

                    </div>


                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="bg-secondary bg-opacity-10 p-4 p-xl-5 rounded position-relative h-100">

                    <div class="d-flex flex-column h-100">

                        <div class="mb-auto">
                            <p class="h2 mb-3">Первый полет в космос</p>

                            <p>
                                Был совершен 12 апреля 1961 года, корабль «Восток-1» стартовал с
                                космодрома Байконур в 09:07 по московскому времени.
                            </p>
                        </div>


                        <div class="mt-auto d-flex flex-column align-items-center justify-content-between">
                            <img src="/img/ui/vostok/rocket.svg" class="img-fluid package-cover mb-2">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </x-container>



    <script>
        const svg = document.getElementById("gameSVG");

        const shipWidth = 100;
        const shipHeight = 100;
        const shipSpeed = 5;
        const baseCometSpeed = 3
        let cometSpeed = baseCometSpeed;
        const cometWidth = 60;
        const cometHeight = 60;
        const cometInterval = 1000 // интервал в миллисекундах между кометами

        let shipX = (svg.width.baseVal.value - shipWidth) / 2;
        const shipY = svg.height.baseVal.value - shipHeight - 10;

        let leftPressed = false;
        let rightPressed = false;

        let comets = [];

        document.addEventListener("keydown", keyDownHandler);
        document.addEventListener("keyup", keyUpHandler);

        function keyDownHandler(event) {
            if (event.key === "ArrowLeft") {
                leftPressed = true;
            } else if (event.key === "ArrowRight") {
                rightPressed = true;
            }
        }

        function keyUpHandler(event) {
            if (event.key === "ArrowLeft") {
                leftPressed = false;
            } else if (event.key === "ArrowRight") {
                rightPressed = false;
            }
        }

        function createShipElement() {
            const shipElement = document.getElementById('ship').cloneNode(true);
            shipElement.setAttribute("x", shipX);
            shipElement.setAttribute("y", shipY);
            shipElement.setAttribute("width", shipWidth);
            shipElement.setAttribute("height", shipHeight);
            shipElement.setAttribute("fill", "#FFFFFF");
            svg.appendChild(shipElement);
            return shipElement;
        }

        const shipElement = createShipElement();

        function moveShip() {
            if (leftPressed && shipX > 0) {
                shipX -= shipSpeed;
            } else if (rightPressed && shipX < svg.width.baseVal.value - shipWidth) {
                shipX += shipSpeed;
            }
            shipElement.setAttribute("x", shipX);
        }

        function createCometElement(x, y) {
            const cometElement = document.getElementById('comet').cloneNode(true);
            cometElement.setAttribute("x", x);
            cometElement.setAttribute("y", y);
            cometElement.setAttribute("width", cometWidth);
            cometElement.setAttribute("height", cometHeight);
            cometElement.setAttribute("fill", "#FF0000");
            svg.appendChild(cometElement);
            return cometElement;
        }

        function moveComets() {
            comets.forEach(comet => {

                comet.y += cometSpeed;
                comet.x = comet.element.getAttribute('x');
                comet.x -= cometSpeed;

                //comet.element.setAttribute("y", comet.y);
                //comet.element.setAttribute("x", comet.x);


                // Рассчитываем вектор движения от кометы к космическому кораблю
                const dx = shipX - comet.x;
                const dy = shipY - comet.y;
                const distance = Math.sqrt(dx * dx + dy * dy);

                // Нормализуем вектор
                const vx = dx / distance;
                const vy = dy / distance;


                if(distance > 100){
                    // Обновляем позицию кометы с учетом скорости
                    comet.x += vx;
                    comet.y += vy;
                }

                // Обновляем атрибуты элемента SVG
                comet.element.setAttribute("x", comet.x);
                comet.element.setAttribute("y", comet.y);



                if (comet.y > svg.height.baseVal.value) {
                    svg.removeChild(comet.element);
                    comets.splice(comets.indexOf(comet), 1);
                }
            });
        }

        function createComet() {

            console.log(shipX, shipY);

            let x = Math.random() * svg.width.baseVal.value + (svg.width.baseVal.value * 0.5);

            if (shipX > svg.width.baseVal.value / 3) {
                x += (shipX * 0.5);
            }

            const y = 0;
            const cometElement = createCometElement(x, y);
            comets.push({element: cometElement, y: y});
        }




        function collisionDetection(fuzziness) {
            const shipRect = shipElement.getBoundingClientRect();
            comets.forEach(comet => {
                const cometRect = comet.element.getBoundingClientRect();
                const fuzzinessFactor = fuzziness * Math.min(shipRect.width, shipRect.height, cometRect.width, cometRect.height);
                if (
                    shipRect.left + fuzzinessFactor < cometRect.right &&
                    shipRect.right - fuzzinessFactor > cometRect.left &&
                    shipRect.top + fuzzinessFactor < cometRect.bottom &&
                    shipRect.bottom - fuzzinessFactor > cometRect.top
                ) {
                    clearInterval(intervalComent);
                    clearInterval(intervalGame);

                    document.getElementById('message').innerText = 'Игра окончена';
                    //alert("Game Over");
                    //document.location.reload();
                }
            });
        }

        function draw() {
            moveShip();
            moveComets();
            collisionDetection(0.4);  // Погрешность 40%
            stats()
        }

        function stats(){
            // 6480

            document.getElementById('timer').dataset.timer = parseFloat(document.getElementById('timer').dataset.timer) + 0.5;

            let value = Math.ceil(parseFloat(document.getElementById('timer').dataset.timer) / 100);

            document.getElementById('timer').innerText = value;

            // ускорим кометы
            cometSpeed = baseCometSpeed + value * 0.1;
        }

        let intervalComent = null;
        let intervalGame = null;

        function start() {
             intervalComent = setInterval(createComet, cometInterval);
             intervalGame = setInterval(draw, 10);

             document.getElementById('start-placeholder').style.visibility = 'hidden';
        }

    </script>



    {{--
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 text-dark mb-3">С днём космонавтики</h1>
            <p class="col-lg-10 fs-4">Каждый День Космонавтики напоминает нам о том, что человечество всегда
                                      стремилось к звёздам и неуклонно движется вперёд, преодолевая границы
                                      исследований и познания. Пусть эта дата вдохновляет нас на новые открытия
                                      и смелые шаги в неизведанные просторы Вселенной.</p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <div class="position-relative mb-5 marketing">

                <div class="text-balance bg-body-secondary rounded p-4 p-xl-5 position-relative">
                    <blockquote><span class="display-3">Космос — это наша судьба, наша мечта, наша надежда и наше будущее.</span></blockquote>

                    <div class="d-flex align-items-center">
                        <div class="lh-1 display-3">
                            <div class="fw-bolder mb-1">Юрий Гагарин</div>
                            <small class="opacity-50">Первый космонавт</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
--}}

@endsection
