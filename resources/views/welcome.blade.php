<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KMIT</title>
    <link href="https://cdn.tailwindcss.com/2.2.15/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
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
        <a href="/pay-fees" class="text-red-500 bg-yellow-300 border-[3px] border-red-500 text-2xl px-4 py-2">PAY
            FEES</a>
    </nav>
    <div class="flex flex-col w-full items-center">
        <h1 class="text-xl text-center font-semibold text-black w-full py-3">
            B.Tech 1 Year 1 Sem KR23 Supply MARCH-2023 Results
        </h1>

        <form action="/result" method="get">
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
    </div>
</body>

</html>
