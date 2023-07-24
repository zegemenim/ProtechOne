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

    <div class="my-8 grid md:grid-cols-4 text-gray-700">
        <div class="flex gap-4 text-center justify-center items-center text-xl font-bold my-4">
            <img src="{{asset("images/shield.png")}}" alt="" height="50px" width="50px" class="opacity-90">
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
    <div class="px-4 md:px-8 text-center lg:mx-[50vh]">
        <h1 class="text-4xl font-bold text-blue-600 py-2">
            ProtechOne
        </h1>
        <p class="text-gray-500">
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


    <div class="flex text-2xl font-bold justify-center mt-16 md:mt-24">
        Statistics of ProtechOne
    </div>

    <div class="grid md:grid-cols-3 my-4 text-gray-600">
        <div class="my-8">
            <div id="counter" class="text-center text-2xl text-blue-700 font-bold ">
                146
            </div>
            <h3 class="text-center text-xl font-bold">
                Happy Users
            </h3>
        </div>
        <div class="my-8">
            <div id="counter1" class="text-center text-2xl text-blue-700 font-bold ">
                146
            </div>
            <h3 class="text-center text-xl font-bold">
                Cyber Attack Stopped
            </h3>
        </div>
        <div class="my-8">
            <div id="counter2" class="text-center text-2xl text-blue-700 font-bold ">
                146
            </div>
            <h3 class="text-center text-xl font-bold">
                Successful Sales
            </h3>
        </div>
    </div>

    <div id="contact" class="flex h-[75vh] justify-center text-center items-center my-16">
        <form action="{{route("contact")}}" method="POST"
              class="grid grid-cols-2 bg-gray-300 rounded-lg p-4 gap-4 border-2 border-blue-700 ring-2 shadow-blue-600 shadow-sm px-4 md:px-8">
            <div class="flex col-span-2 text-2xl text-blue-900 font-bold justify-center">
                Contact Us
            </div>
            @csrf
            @if(isset($success))
                <div class="col-span-2">
                    <div class="border border-blue-800 bg-green-300 text-green-800 rounded-lg p-2">
                        {{$success}}
                    </div>
                </div>
            @endif
            @if(isset($error))
                <div class="col-span-2">
                    <div class="border border-blue-800 bg-red-300 text-red-800 rounded-lg p-2">
                        {{$error}}
                    </div>
                </div>
            @endif
            <input name="name" type="text" required placeholder="Name and Surname"
                   class="border-2 border-blue-700 rounded-lg p-2 outline-none focus:shadow-lg focus:shadow-blue-700"
                   value="{{auth()->user() ? auth()->user()->name : ""}}">
            <input name="email" required type="email" placeholder="Email Address"
                   class="border-2 border-blue-700 rounded-lg p-2 outline-none focus:shadow-lg focus:shadow-blue-700"
                   value="{{auth()->user() ? auth()->user()->email : ""}}">
            <input name="subject" type="text" required placeholder="Subject"
                   class="border-2 border-blue-700 rounded-lg p-2 outline-none focus:shadow-lg focus:shadow-blue-700 col-span-2"
                   value="">
            <textarea name="message" id="" cols="15" required rows="10" placeholder="Your Message"
                      class="border-2 border-blue-700 rounded-lg p-2 outline-none focus:shadow-lg focus:shadow-blue-700 col-span-2 max-h-[50vh]"></textarea>

            <button type="submit"
                    class="col-span-2 border-2 border-blue-700 rounded-lg p-2 outline-none focus:shadow-lg focus:shadow-blue-700 hover:bg-blue-700 hover:text-white">
                Send
            </button>
        </form>
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

        // Intersection Observer API to trigger animation when element is in view
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateValue(0, targetNumber, duration);
                    observer.unobserve(counterElement);
                }
            });
        });

        observer.observe(counterElement);
    }

    count("counter");
    count("counter1");
    count("counter2");

</script>
