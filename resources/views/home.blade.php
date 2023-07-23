@include("components.header")

<main class="">
    <div class="h-screen justify-center items-center grid md:grid-cols-2 bg-blue-700 text-center">

        <div class="px-4 md:px-8">
            <h1 class="text-6xl font-bold text-white py-2">
                Welcome to ProtechOne
            </h1>
            <p class="text-gray-400 pb-8">
                Get yourself 100% safe with ProtechOne, We are always by your side with our advanced security systems
                and experience. Everyone has the right to move freely online.
            </p>
            <a class="ease-in duration-300 border-2 hover:bg-blue-800 rounded-lg shadow-md hover:shadow-lg hover:shadow-blue-500 text-white shadow-blue-400 border-blue-700 p-2 "
               href="">
                Download Now
            </a>
        </div>
        <div>
            <img src="{{asset("images/test.png")}}" alt="">
        </div>
    </div>

    <div class="flex text-2xl font-bold justify-center mt-16">
        ProtechOne Free Antivirus
    </div>

    <div class="my-8 grid md:grid-cols-4">
        <div class="flex gap-4 text-center justify-center items-center text-xl font-bold my-4">
            <img src="{{asset("images/shield.png")}}" alt="" height="50px" width="50px">
            <h2 class="text-center">
                100% Safe
            </h2>
        </div>
        <div class="flex gap-4 text-center justify-center items-center text-xl font-bold my-4">
            <img src="{{asset("images/people.png")}}" alt="" height="50px" width="50px">
            <h2 class="text-center">
                More than 100 users
            </h2>
        </div>
        <div class="flex gap-4 text-center justify-center items-center text-xl font-bold my-4">
            <img src="{{asset("images/shuttle.png")}}" alt="" height="50px" width="50px">
            <h2 class="text-center">
                Very Fast
            </h2>
        </div>
        <div class="flex gap-4 text-center justify-center items-center text-xl font-bold my-4">
            <img src="{{asset("images/laptop.png")}}" alt="" height="50px" width="50px">
            <h2 class="text-center">
                For All Systems
            </h2>
        </div>
    </div>

    <div class="flex text-2xl font-bold justify-center mt-16 ease-in duration-300 transition-all" id="about">
        About Us
    </div>

    {{--    <div class="grid md:grid-cols-2 my-2">--}}
    <div class="px-4 md:px-8 text-center md:mx-[32rem]">
        <h1 class="text-4xl font-bold text-blue-600 py-2">
            ProtechOne
        </h1>
        <p class="text-gray-400">
            ProtechOne is a cybersecurity firm that focuses on protecting information and providing robust defense
            against cyber threats. The company offers customized firewall solutions to organizations and
            institutions seeking to safeguard their networks, systems, and data. Supported by a team of experts who
            stay up-to-date with the latest technologies, ProtechOne takes a proactive approach to understanding
            customer needs and delivering effective solutions. The company strives to maintain high levels of
            customer satisfaction and aims to be at the forefront of the security industry.
        </p>
    </div>
    {{--        <div class="mt-8 px-4 text-md text-gray-800">--}}
    {{--            <div class="flex mb-2">--}}
    {{--                <img src="{{asset("images/check.png")}}" alt="Check" class="h-6">--}}
    {{--                <h4 class="mx-3">--}}
    {{--                    Ddos Protection--}}
    {{--                </h4>--}}
    {{--            </div>--}}
    {{--            <div class="flex mb-2">--}}
    {{--                <img src="{{asset("images/check.png")}}" alt="Check" class="h-6">--}}
    {{--                <h4 class="mx-3">--}}
    {{--                    Back Door Protection--}}
    {{--                </h4>--}}
    {{--            </div>--}}
    {{--            <div class="flex mb-2">--}}
    {{--                <img src="{{asset("images/check.png")}}" alt="Check" class="h-6">--}}
    {{--                <h4 class="mx-3">--}}
    {{--                    Virus Protection--}}
    {{--                </h4>--}}
    {{--            </div>--}}
    {{--            <div class="flex mb-2">--}}
    {{--                <img src="{{asset("images/check.png")}}" alt="Check" class="h-6">--}}
    {{--                <h4 class="mx-3">--}}
    {{--                    Malware Protection--}}
    {{--                </h4>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    

    <div class="flex text-2xl font-bold justify-center mt-16">
        Statistics of ProtechOne
    </div>

    <div class="grid grid-cols-3 my-8">
        <div class="">
            <div id="counter" class="text-center text-2xl text-blue-700 font-bold ">
                146
            </div>
            <h3 class="text-center text-xl font-bold text-gray-800">
                Happy Users
            </h3>
        </div>
        <div class="">
            <div id="counter1" class="text-center text-2xl text-blue-700 font-bold ">
                146
            </div>
            <h3 class="text-center text-xl font-bold text-gray-800">
                Cyber Attack Stopped
            </h3>
        </div>
        <div class="">
            <div id="counter2" class="text-center text-2xl text-blue-700 font-bold ">
                146
            </div>
            <h3 class="text-center text-xl font-bold text-gray-800">
                Successful Sales
            </h3>
        </div>
    </div>

</main>


@include("components.footer")
<script>
    function count(id) {
        const counterElement = document.getElementById(id);
        if (counterElement.innerText === "") {
            counterElement.innerText = 0;
        }
        const targetNumber = parseInt(counterElement.innerText, 10);
        const duration = 1500;

        function animateValue(start, end, duration) {
            const range = end - start;
            const increment = end > start ? 1 : -1;
            const stepTime = Math.abs(Math.floor(duration / range));
            let current = start;

            function updateTimer() {
                current += increment;
                counterElement.innerText = current;
                if ((increment === 1 && current >= end) || (increment === -1 && current <= end)) {
                    counterElement.innerText = end;
                } else {
                    setTimeout(updateTimer, stepTime);
                }
            }

            updateTimer();
        }

        animateValue(0, targetNumber, duration);

    }

    count("counter");
    count("counter1");
    count("counter2");

</script>
