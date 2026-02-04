// File: /Styles/js/charts.js


const projectsCtx = document.getElementById('projectsChart');
const bursaryCtx = document.getElementById('bursaryChart');

if (projectsCtx) {
    new Chart(projectsCtx, {
        type: 'bar',
        data: {
            labels: ['Education', 'Roads', 'Health', 'Water', 'Youth'],
            datasets: [{
                label: 'Number of Projects',
                data: [18, 12, 7, 5, 4]
            }]
        },
        options: {
            responsive: true
        }
    });
}

if (bursaryCtx) {
    new Chart(bursaryCtx, {
        type: 'pie',
        data: {
            labels: ['Education', 'Infrastructure', 'Health', 'Youth'],
            datasets: [{
                data: [45, 30, 15, 10]
            }]
        }
    });
}
