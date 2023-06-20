<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KMIT</title>
    <link href="https://cdn.tailwindcss.com/2.2.15/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        .flex-container {
            width: 100%;
            display: flex;
            border: 1px solid black;
        }

        .flex-item {
            border: 1px solid black;
            padding: 5px;
        }

        .name-item {
            width: 8%;
        }

        .name-d-item {
            width: 30%;
        }

        .hall-item {
            width: 16%;
        }

        .hall-d-item {
            width: 16%;
        }

        .branch-item {
            width: 15%;
        }

        .branch-d-item {
            width: 15%;
        }

        td {
            text-align: center;
        }

        th,
        td {
            border: 1px solid black;
            padding: 3px 5px;
        }

        @media all and (max-width: 720px) {
            .flex-container {
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-template-rows: 1fr 1fr 1fr;
                width: 500px;
            }

            .flex-item {
                width: unset;
            }
        }

        @media print {

            /* Hide header with date, URL, and time */
            header {
                display: none;
            }
        }
    </style>
</head>

<body>
    <nav class="flex justify-center gap-x-9 py-2">
        <img src="kmit-bar.png" class="w-[100px] flex-grow-0" />
        <div class="flex flex-col gap-y-1 items-center">
            <h1 class="text-xl font-bold text-center">
                KESHAV MEMORIAL INSTITUTE OF TECHNOLOGY
            </h1>
            <h1 class="text-xl font-bold text-center">
                (AN AUTONOMOUS INSTITUTION)
            </h1>
            <h1 class="text-xl font-bold text-center">
                Narayanguda, Hyderabad, Telangana 500029
            </h1>
        </div>
    </nav>
    <nav class="flex justify-end px-4 items-center gap-x-5 bg-[#14777f] py-1">
        <a href="https://ssolive.myclassboard.com/Account/Login?ReturnUrl=%2Fconnect%2Fauthorize%2Fcallback%3Fclient_id%3DDIL4KLQ05IV1JZOXCLM0%26redirect_uri%3Dhttps%253A%252F%252Ficici.myclassboard.com%252Fsso%252FCallback%26response_type%3Dcode%26scope%3Dopenid%2520profile%2520offline_access"
            class="text-red-500 bg-yellow-300 border-[3px] border-red-500 text-2xl px-4 py-2">PAY
            FEES</a>
    </nav>
    <div class="flex flex-col w-full items-center">
        <h1 class="text-xl text-center font-semibold text-black w-full py-3">
            B.Tech 1 Year 1 Sem KR23 Supply MARCH-2023 Results
        </h1>

        <form action="/students/kmit/first-year/computer-science-department/results" method="get">
            <div class="flex flex-col">
                <div class="flex gap-x-3 py-5 items-center">
                    <label for="roll" class="text-md font-bold">Hall Ticket : </label>
                    <input type="text" name="roll" id="roll" placeholder="Enter Hall ticket number"
                        class="border-[2px] border-gray-500 px-3 py-1 rounded-lg focus:outline-none" />
                </div>
                <div class="flex gap-x-3 items-center">
                    <label for="date" class="text-md font-bold">Date of Birth : </label>
                    <input type="date" name="date" id="date"
                        class="border-[2px] border-gray-500 px-3 py-1 rounded-lg focus:outline-none" />
                </div>
            </div>
            <div class="flex justify-center my-7">
                <button type="submit" class="bg-red-600 text-white py-3 px-5 rounded-lg">
                    Show Results
                </button>
            </div>
        </form>
        <div id="result">
            <div class="w-full flex flex-col items-center">
                <div class="w-[500px] lg:w-[80%]">
                    <div class="flex-container my-3">
                        <div class="flex-item name-item">Name</div>
                        <div class="flex-item name-d-item">BETHAM SRI HARSHA</div>
                        <div class="flex-item hall-item">Hall Ticket</div>
                        <div class="flex-item hall-d-item">22BD1A0569</div>
                        <div class="flex-item branch-item">Branch</div>
                        <div class="flex-item branch-d-item">CSE</div>
                    </div>

                    <div
                        class="md:w-[70%] lg:[90%] sm:w-[500px] w-[350px] md:overflow-x-visible overflow-x-scroll mx-auto">
                        <table id="myTable">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Subject Code</th>
                                    <th>Subjects</th>
                                    <th>Grade Secured</th>
                                    <th>Grade Points</th>
                                    <th>Result</th>
                                    <th>Credits</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>21101</td>
                                    <td>PROGRAMMING FOR PROBLEM SOLVING</td>
                                    <td>O</td>
                                    <td>10</td>
                                    <td>P</td>
                                    <td>3.5</td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>21101</td>
                                    <td>PROGRAMMING FOR PROBLEM SOLVING</td>
                                    <td>O</td>
                                    <td>10</td>
                                    <td>P</td>
                                    <td>3.5</td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>21101</td>
                                    <td>PROGRAMMING FOR PROBLEM SOLVING</td>
                                    <td>O</td>
                                    <td>10</td>
                                    <td>P</td>
                                    <td>3.5</td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>21101</td>
                                    <td>PROGRAMMING FOR PROBLEM SOLVING</td>
                                    <td>O</td>
                                    <td>10</td>
                                    <td>P</td>
                                    <td>3.5</td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td colspan="2">
                                        Note:-2 <br />
                                        indicates Withheld
                                    </td>
                                    <td>REGISTERED : 9</td>
                                    <td>APPEARED</td>
                                    <td>PASSED</td>
                                    <td>TOTAL</td>
                                    <td>20</td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td colspan="2">Result : PASS</td>
                                    <td colspan="5">Semester Grade Point Average (SGPA)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full flex justify-center">
            <button class="px-5 py-3 text-white bg-green-500" id="printing-btn">
                Print
            </button>
        </div>
        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
            crossorigin="anonymous"></script>
        <script src="print-this/printThis.js"></script>
        <script>
            $(document).ready(function() {
                $("#printing-btn").click(function() {
                    $("#result").printThis();
                });
            });
        </script>
    </div>



</body>

</html>
