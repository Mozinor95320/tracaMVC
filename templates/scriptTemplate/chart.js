

// Création du graphique General
const ctx = document.getElementById('myChartGeneral').getContext('2d');
chartGeneral = new Chart(ctx, {
    type: 'line',
    data: {
        labels: temps, // Utilisation de la colonne 'temps' sur l'axe X
        datasets: [
            {
                label: 'Dancer Arm Pressure Setpoint',
                data: dancerArmPressureSetpoint,
                borderColor: 'rgba(255, 99, 132, 1)',
                fill: false
            },
            {
                label: 'Dancer Arm Tension Actual',
                data: dancerArmTensionActual,
                borderColor: 'rgba(54, 162, 235, 1)',
                fill: false
            },
            {
                label: 'Post Tension Actual',
                data: postTensionActual,
                borderColor: 'rgba(75, 192, 192, 1)',
                fill: false
            },
            {
                label: 'Pre Tension Setpoint',
                data: preTensionSetpoint,
                borderColor: 'rgba(153, 102, 255, 1)',
                fill: false
            },
            {
                label: 'Pre Tension Actual',
                data: preTensionActual,
                borderColor: 'rgba(255, 159, 64, 1)',
                fill: false
            },
            {
                label: 'Hot Air Blower Setpoint',
                data: hotAirBlowerSetpoint,
                borderColor: 'rgba(255, 206, 86, 1)',
                fill: false
            },
            {
                label: 'Nozzle Heater Actual',
                data: nozzleHeaterActual,
                borderColor: 'rgba(75, 192, 192, 1)',
                fill: false
            },
            {
                label: 'Nozzle Heater Setpoint',
                data: nozzleHeaterSetpoint,
                borderColor: 'rgba(54, 162, 235, 1)',
                fill: false
            },
            {
                label: 'Tape Heater Actual',
                data: tapeHeaterActual,
                borderColor: 'rgba(153, 102, 255, 1)',
                fill: false
            },
            {
                label: 'Tape Heater Setpoint',
                data: tapeHeaterSetpoint,
                borderColor: 'rgba(255, 99, 132, 1)',
                fill: false
            }
        ]
    },
    options: {
        responsive: true, // Rend le graphique responsive
        maintainAspectRatio: false, // Permet d'adapter la hauteur en fonction de la largeur
        scales: {
            x: {
                type: 'time', // Échelle temporelle
                time: {
                    unit: 'minute', // Affichage par minute
                    tooltipFormat: 'YYYY-MM-DD HH:mm:ss', // Format des tooltips
                    displayFormats: {
                        minute: 'YYYY-MM-DD HH:mm:ss' // Format affiché
                    }
                },
                title: {
                    display: true,
                    text: 'Temps'
                }
            },
            y: {
                beginAtZero: true, // Début de l'axe Y à zéro
                title: {
                    display: true,
                    text: 'Valeurs'
                }
            }
        },
        plugins: {
            zoom: {
                zoom: {
                    wheel: {
                        enabled: true,
                    },
                    pinch: {
                        enabled: true
                    },
                    mode: 'xy',
                }
            }
        }
    }
});

// Création du graphique PRE TENSION
const ctx2 = document.getElementById('chart2').getContext('2d');
chartGeneral = new Chart(ctx2, {
    type: 'line',
    data: {
        labels: temps, // Utilisation de la colonne 'temps' sur l'axe X
        datasets: [
            {
                label: 'Pre Tension Setpoint',
                data: preTensionSetpoint,
                borderColor: 'rgba(153, 102, 255, 1)',
                fill: false
            },
            {
                label: 'Pre Tension Actual',
                data: preTensionActual,
                borderColor: 'rgba(255, 159, 64, 1)',
                fill: false
            }
        ]
    },
    options: {
        responsive: true, // Rend le graphique responsive
        maintainAspectRatio: false, // Permet d'adapter la hauteur en fonction de la largeur
        scales: {
            x: {
                type: 'time', // Échelle temporelle
                time: {
                    unit: 'minute', // Affichage par minute
                    tooltipFormat: 'YYYY-MM-DD HH:mm:ss', // Format des tooltips
                    displayFormats: {
                        minute: 'YYYY-MM-DD HH:mm:ss' // Format affiché
                    }
                },
                title: {
                    display: true,
                    text: 'Temps'
                }
            },
            y: {
                beginAtZero: true, // Début de l'axe Y à zéro
                title: {
                    display: true,
                    text: 'Valeurs'
                }
            }
        },
        plugins: {
            zoom: {
                zoom: {
                    wheel: {
                        enabled: true,
                    },
                    pinch: {
                        enabled: true
                    },
                    mode: 'xy',
                }
            }
        }
    }
});

// Création du graphique POST TENSION
const ctx3 = document.getElementById('chart3').getContext('2d');
chartGeneral = new Chart(ctx3, {
    type: 'line',
    data: {
        labels: temps, // Utilisation de la colonne 'temps' sur l'axe X
        datasets: [
            {
                label: 'Dancer Arm Pressure Setpoint',
                data: dancerArmPressureSetpoint,
                borderColor: 'rgba(255, 99, 132, 1)',
                fill: false
            },
            {
                label: 'Dancer Arm Tension Actual',
                data: dancerArmTensionActual,
                borderColor: 'rgba(54, 162, 235, 1)',
                fill: false
            },
            {
                label: 'Post Tension Actual',
                data: postTensionActual,
                borderColor: 'rgba(75, 192, 192, 1)',
                fill: false
            }
        ]
    },
    options: {
        responsive: true, // Rend le graphique responsive
        maintainAspectRatio: false, // Permet d'adapter la hauteur en fonction de la largeur
        scales: {
            x: {
                type: 'time', // Échelle temporelle
                time: {
                    unit: 'minute', // Affichage par minute
                    tooltipFormat: 'YYYY-MM-DD HH:mm:ss', // Format des tooltips
                    displayFormats: {
                        minute: 'YYYY-MM-DD HH:mm:ss' // Format affiché
                    }
                },
                title: {
                    display: true,
                    text: 'Temps'
                }
            },
            y: {
                beginAtZero: true, // Début de l'axe Y à zéro
                title: {
                    display: true,
                    text: 'Valeurs'
                }
            }
        },
        plugins: {
            zoom: {
                zoom: {
                    wheel: {
                        enabled: true,
                    },
                    pinch: {
                        enabled: true
                    },
                    mode: 'xy',
                }
            }
        }
    }
});

function resetZoomChartGeneral() {
    chartGeneral.resetZoom();
}

function resetZoomChartPreTension() {
    chartPreTension.resetZoom();
}

function resetZoomChartPostTension() {
    chartPostTension.resetZoom();
}

// Appel à la fonction pour afficher le graphique
renderChart();