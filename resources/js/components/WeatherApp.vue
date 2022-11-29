<template>
    <div class="text-white mb-8">
        <div class="places-input text-gray-800">
            <input type="text" class="w-full">
        </div>
        <div class="weather-container font-sans w-128 max-w-lg rounded-lg overflow-hidden bg-gray-900 shadow-lg mt-4">
            <div class="current-weather flex items-center justify-between px-6 py-8">
                <div class="flex items-center">
                    <div>
                        <div class="text-6xl font-semibold">8</div>
                        <div>Feels like</div>
                    </div>
                    <div class="mx-5">
                        <div class="font-semibold">Cloudy</div>
                        <div>Netherlands, Amsterdam</div>
                    </div>
                </div>
                <div>
                    <canvas id="iconCurrent" width="96" height="96"></canvas>
                </div>
            </div>
            <div class="future-weather text-sm bg-gray-800 px-6 py-8 overflow-hidden">
                <div class="flex items-center">
                    <div class="w-1/6 text-2xl text-gray-200">Mon</div>
                    <div class="w-4/6 px-5 flex items-center">
                        <div> <canvas id="icon1" width="24" height="24"></canvas>
                        </div>
                        <div class="ml-3">Cloudy with a chance of a showers</div>
                    </div>
                    <div class="w-1/6 text-right">
                        <div>5°C</div>
                        <div>-3°C</div>
                    </div>
                </div>
                <div class="flex items-center mt-8">
                    <div class="w-1/6 text-2xl text-gray-200">Tue</div>
                    <div class="w-4/6 px-5 flex items-center">
                        <div> <canvas id="icon2" width="24" height="24"></canvas>
                        </div>
                        <div class="ml-3">Wind starting in the morning. </div>
                    </div>
                    <div class="w-1/6 text-right">
                        <div>5°C</div>
                        <div>-3°C</div>
                    </div>
                </div>
                <div class="flex items-center mt-8">
                    <div class="w-1/6 text-2xl text-gray-200">Wed</div>
                    <div class="w-4/6 px-5 flex items-center">
                        <div> <canvas id="icon3" width="24" height="24"></canvas>
                        </div>
                        <div class="ml-3">Clear day with sunlight</div>
                    </div>
                    <div class="w-1/6 text-right">
                        <div>10°C</div>
                        <div>6°C</div>
                    </div>
                </div>
                <div class="flex items-center mt-8">
                    <div class="w-1/6 text-2xl text-gray-200">Thu</div>
                    <div class="w-4/6 px-5 flex items-center">
                        <div> <canvas id="icon4" width="24" height="24"></canvas>
                        </div>
                        <div class="ml-3">Light rain throughout the day.
</div>
                    </div>
                    <div class="w-1/6 text-right">
                        <div>5°C</div>
                        <div>-3°C</div>
                    </div>
                </div>
                <div class="flex items-center mt-8">
                    <div class="w-1/6 text-2xl text-gray-200">Fri</div>
                    <div class="w-4/6 px-5 flex items-center">
                        <div> <canvas id="icon5" width="24" height="24"></canvas>
                        </div>
                        <div class="ml-3">Light snow thoroughout the day.</div>
                    </div>
                    <div class="w-1/6 text-right">
                        <div>5°C</div>
                        <div>-3°C</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        this.fetchData()
    },
    methods: {
        fetchData() {
            // fetch(`https://cors-anywhere.herokuapp.com/https://api.darksky.net/forecast/8aff8b1d48d870749e0ac28b3f3531b6/37.8267,-122.4233`)
            // .then(response => response.json())
            // .then(data => {
            //     console.log(data)
            // })
            var skycons = new Skycons({ 'color': 'white' });
            skycons.add("iconCurrent", 'partly-cloudy-day');
            skycons.add("icon1", 'rain');
            skycons.add("icon2", 'wind');
            skycons.add("icon3", 'clear-day');
            skycons.add("icon4", 'sleet');
            skycons.add("icon5", 'snow');

            skycons.play()
        }
    }
}
</script>
