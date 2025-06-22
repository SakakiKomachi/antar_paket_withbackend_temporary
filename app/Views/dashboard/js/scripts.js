document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('.dropdown > a').addEventListener('click', e => {
        const isCollapse = !(Array.from(document.querySelector('.dropdown > a').classList).pop() === 'collapsed')
        if (isCollapse) {
            document.querySelector('.dropdown').classList.add('bg-white')
            document.querySelector('.dropdown > a').classList.add('text-first')
            document.querySelector('.dropdown > a > img').src = "<?= base_url('assets/img/user-blue.png') ?>"
        } else {
            document.querySelector('.dropdown').classList.remove('bg-white')
            document.querySelector('.dropdown > a').classList.remove('text-first')
            document.querySelector('.dropdown > a > img').src = "<?= base_url('assets/img/user-white.png') ?>"
        }
    })

    var options = {
        chart: {
            type: 'bar',
        },
        series: [{
            data: [
                {
                    fillColor: '#FF7294',
                    x: 'Senin',
                    y: 200
                },
                {
                    fillColor: '#FF7294',
                    x: 'Selasa',
                    y: 140
                },
                {
                    fillColor: '#FF7294',
                    x: 'Rabu',
                    y: 300
                },
                {
                    fillColor: '#FF7294',
                    x: 'Kamis',
                    y: 210
                },
                {
                    fillColor: '#FF7294',
                    x: 'Jumat',
                    y: 150
                },
                {
                    fillColor: '#FF7294',
                    x: 'Sabtu',
                    y: 450
                },
            ]
        }]
    }

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
})