/* Bar chart */
function barChart(idName, width, height = "270", data, data2, categories, columnWidth) {
  var optionRadial = {
    series: [{
      name: "Target",
      data: data,
      color: "#7811FF",
    }, {
      name: "Total Sales",
      data: data2,
      color: "#00AAFF",
    }],
    chart: {
      width: width,
      height: height,
      type: 'bar',
      parentHeightOffset: 0,
      toolbar: {
        show: false
      },
      animations: {
        enabled: true,
        easing: 'easeinout',
        speed: 800,
        animateGradually: {
          enabled: true,
          delay: 150
        },
        dynamicAnimation: {
          enabled: true,
          speed: 350
        }
      },
    },
    legend: {
      show: false
    },
    stroke: {
      show: true,
      width: 30,
      colors: ['transparent']
    },
    grid: {
      borderColor: '#485e9029',
      strokeDashArray: 5,
      padding: {
        top: 0,
        right: 0,
        bottom: 0,
      },
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: columnWidth,
        borderRadius: 2,
      }
    },
    dataLabels: {
      enabled: false
    },
    tooltip: {
      enabled: true,
      enabledOnSeries: undefined,
      shared: true,
      followCursor: false,
      intersect: false,
      x: {
        show: true,
        format: 'dd MMM',
        formatter: undefined,
      },
      y: {
        formatter: undefined,
        title: {
          formatter: (seriesName) => seriesName,
        },
      },
      z: {
        formatter: undefined,
        title: 'Size: '
      },
      marker: {
        show: true,
      },
      fixed: {
        enabled: false,
        position: 'topLeft',
        offsetY: 0,
      },
      style: {
        fontSize: '12px',
        fontFamily: '"Jost", sans-serif',
      },
    },
    xaxis: {
      crosshairs: {
        show: false
      },
      labels: {
        style: {
          colors: '#747474',
          fontSize: '14px',
          fontFamily: '"Jost", sans-serif',
          fontWeight: 400,
          cssClass: 'apexcharts-yaxis-label',
        },
      },
      categories: categories,
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
    },
    yaxis: {
      labels: {
        offsetX: -15,
        formatter: (val) => {
          return val + "K";
        },
        style: {
          colors: ['#747474'],
          fontSize: '14px',
          fontFamily: '"Jost", sans-serif',
          fontWeight: 400,
          cssClass: 'apexcharts-yaxis-label',
        },
      },
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
    },
  };
  if (document.querySelectorAll(idName).length > 0) {
    new ApexCharts(document.querySelector(idName), optionRadial).render();
  }
};

/* Bar chart */
function barChart2(idName, data, data2, height, categories) {
  var optionRadial = {
    series: [{
      name: "Target",
      data: data,
      color: "#7811FF",
    }, {
      name: "Total Sales",
      data: data2,
      color: "#00AAFF",
    }],
    chart: {
      width: "100%",
      height: height,
      type: "bar",
      parentHeightOffset: 0,
      toolbar: {
        show: false
      }
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      show: true,
      width: 40,
      colors: ['transparent']
    },
    grid: {
      borderColor: '#485e9029',
      strokeDashArray: 5,
      padding: {
        top: 0,
        right: 0,
        bottom: 0,
      },
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: '45%',
        borderRadius: 2,
      }
    },
    legend: {
      show: false,
    },
    states: {

    },
    tooltip: {
      enabled: true,
      enabledOnSeries: undefined,
      shared: true,
      followCursor: false,
      intersect: false,
      x: {
        show: true,
        format: 'dd MMM',
        formatter: undefined,
      },
      y: {
        formatter: undefined,
        title: {
          formatter: (seriesName) => seriesName,
        },
      },
      z: {
        formatter: undefined,
        title: 'Size: '
      },
      marker: {
        show: true,
      },
      fixed: {
        enabled: false,
        position: 'topLeft',
        offsetY: 0,
      },
      style: {
        fontSize: '12px',
        fontFamily: '"Jost", sans-serif',
      },
    },
    xaxis: {
      crosshairs: {
        show: false
      },
      labels: {
        style: {
          colors: Array.from({
            length: 12
          }, () => '#747474'),
          fontSize: '14px',
          fontFamily: '"Jost", sans-serif',
          fontWeight: 400,
          cssClass: 'apexcharts-yaxis-label',
        },
      },
      categories: categories,
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
    },
    yaxis: {
      labels: {
        offsetX: -15,
        formatter: (val) => {
          return val + "K";
        },
        style: {
          colors: ['#747474'],
          fontSize: '14px',
          fontFamily: '"Jost", sans-serif',
          fontWeight: 400,
          cssClass: 'apexcharts-yaxis-label',
        },
      },
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
    },
  };
  if (document.querySelectorAll(idName).length > 0) {
    new ApexCharts(document.querySelector(idName), optionRadial).render();
  }
};

function demoBar(idName, width, height = "270") {
  var optionBar = {
    series: [{
      data: [400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380]
    }],
    colors: ['#8231D3'],
    chart: {
      width: width,
      height: height,
      type: 'bar',
      toolbar: {
        show: false,
      },
    },
    legend: {
      show: false
    },

    plotOptions: {
      bar: {
        borderRadius: 4,
        horizontal: false,
      }
    },
    dataLabels: {
      enabled: false
    },
    grid: {
      borderColor: '#485e9029',
      strokeDashArray: 5,
      padding: {
        top: 0,
        right: 0,
        bottom: 0,
      },
    },
    xaxis: {
      categories: ["Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
      ],
      labels: {
        style: {
          colors: '#747474',
          fontSize: '14px',
          fontFamily: '"Jost", sans-serif',
          fontWeight: 400,
          cssClass: 'apexcharts-yaxis-label',
        },
      },
      axisBorder: {
        show: false

      },
      axisTicks: {
        show: false,
      },
    },
    yaxis: {
      tickAmount: 4,
      labels: {
        offsetX: -15,
        formatter: (val) => {
          return val + "K";
        },
        style: {
          colors: ['#747474'],
          fontSize: '14px',
          fontFamily: '"Jost", sans-serif',
          fontWeight: 400,
          cssClass: 'apexcharts-yaxis-label',
        },

      },
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
    },
  };
  if (document.querySelectorAll(idName).length > 0) {
    new ApexCharts(document.querySelector(idName), optionBar).render();
  }
};

function groupBarChart(idName, width, height = "270") {
  var optionRadial = {
    series: [{
      data: [44, 55, 41, 64, 22, 43, 21]
    }, {
      data: [53, 32, 33, 52, 13, 44, 32]
    }],
    colors: ['#8231D3', '#00AAFF'],

    chart: {
      width: width,
      height: height,
      type: 'bar',
      toolbar: {
        show: false,
      },
    },
    legend: {
      show: false
    },
    tooltip: {
      enabled: true,
      style: {
        fontSize: '14px',
        fontFamily: '"Jost", sans-serif',
      },
      tooltip: {
        custom: function ({
          series,
          seriesIndex,
          dataPointIndex,
          w
        }) {
          return (
            '<div class="arrow_box">' +
            "<span>" +
            w.globals.labels[dataPointIndex] +
            ": " +
            series[seriesIndex][dataPointIndex] +
            "</span>" +
            "</div>"
          );
        }
      },
      y: {
        formatter: (val) => {
          return val + "K";
        },
      },

    },
    grid: {
      borderColor: '#485e9029',
      strokeDashArray: 5,
      padding: {
        top: 0,
        right: 0,
        bottom: 0,
      },
    },
    plotOptions: {
      bar: {
        borderRadius: 4,
        horizontal: true,
      }
    },
    dataLabels: {
      enabled: false
    },
    xaxis: {
      crosshairs: {
        show: false
      },
      labels: {
        style: {
          colors: '#747474',
          fontSize: '14px',
          fontFamily: '"Jost", sans-serif',
          fontWeight: 400,
          cssClass: 'apexcharts-yaxis-label',
        },
      },
      categories: [2001, 2002, 2003, 2004, 2005, 2006, 2007],
      axisBorder: {
        show: false

      },
      axisTicks: {
        show: false,
      },
      tooltip: {
        enabled: false
      },
    },
    yaxis: {
      min: 0,
      max: 80,
      tickAmount: 4,
      labels: {
        offsetX: -15,
        formatter: (val) => {
          return val + "K";
        },
        style: {
          colors: ['#747474'],
          fontSize: '14px',
          fontFamily: '"Jost", sans-serif',
          fontWeight: 400,
          cssClass: 'apexcharts-yaxis-label',
        },

      },
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
    },

  };
  if (document.querySelectorAll(idName).length > 0) {
    new ApexCharts(document.querySelector(idName), optionRadial).render();
  }
};

function singleBarChart(idName) {
  var optionRadial = {
    series: [{
      name: "Orders",
      data: [35, 55, 25, 60, 42, 80, 35],
      color: "#7811FF",
    }, {
      name: "Sales",
      data: [10, 30, 8, 30, 22, 38, 45],
      color: "#00AAFF",
    }],
    chart: {
      width: "100%",
      height: 350,
      type: "bar",
      parentHeightOffset: 0,
      toolbar: {
        show: false
      }
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      show: true,
      width: 30,
      colors: ['transparent']
    },
    grid: {
      borderColor: '#485e9029',
      strokeDashArray: 5,
      padding: {
        top: 0,
        right: 0,
        bottom: 0,
      },
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: '50%',
        borderRadius: 2,
      }
    },
    legend: {
      show: true,
      position: 'top',
      fontSize: '13px',
      fontFamily: '"Jost", sans-serif',
      fontWeight: 400,
      labels: {
        colors: '#747474',
      },
      markers: {
        width: 8,
        height: 8,
        radius: 20,
        offsetX: -4,
        offsetY: 0,
      },
      itemMargin: {
        horizontal: 20,
      }
    },
    states: {

    },
    tooltip: {
      enabled: true,
      enabledOnSeries: undefined,
      shared: true,
      followCursor: false,
      intersect: false,
      x: {
        show: true,
        format: 'dd MMM',
        formatter: undefined,
      },
      y: {
        formatter: undefined,
        title: {
          formatter: (seriesName) => seriesName,
        },
      },
      z: {
        formatter: undefined,
        title: 'Size: '
      },
      marker: {
        show: true,
      },
      fixed: {
        enabled: false,
        position: 'topLeft',
        offsetY: 0,
      },
      style: {
        fontSize: '12px',
        fontFamily: '"Jost", sans-serif',
      },
    },
    xaxis: {
      crosshairs: {
        show: false
      },
      labels: {
        style: {
          colors: Array.from({
            length: 12
          }, () => '#747474'),
          fontSize: '14px',
          fontFamily: '"Jost", sans-serif',
          fontWeight: 400,
          cssClass: 'apexcharts-yaxis-label',
        },
      },
      categories: [
        "Sat",
        "Sun",
        "Mon",
        "Tue",
        "Wed",
        "Thu",
        "Fri"
      ],
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
    },
    yaxis: {
      labels: {
        offsetX: -15,
        formatter: (val) => {
          return val + "K";
        },
        style: {
          colors: ['#747474'],
          fontSize: '14px',
          fontFamily: '"Jost", sans-serif',
          fontWeight: 400,
          cssClass: 'apexcharts-yaxis-label',
        },
      },
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
    },
  };
  if (document.querySelectorAll(idName).length > 0) {
    new ApexCharts(document.querySelector(idName), optionRadial).render();
  }
};

function profileBarChart(className, name, data, color, height) {
  var optionRadial = {
    series: [{
      name: name,
      data: data,
      color: color,
    }],
    chart: {
      width: 130,
      height: height,
      type: "bar",
      parentHeightOffset: 0,
      toolbar: {
        show: false
      }
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      show: true,
      width: 45,
      colors: ['transparent']
    },
    grid: {
      show: true,
      padding: {
        top: -25,
        right: -20,
        bottom: 0,
      },
      xaxis: {
        labels: {
          show: false
        },
        lines: {
          show: false
        }
      },
      yaxis: {
        labels: {
          show: false
        },
        lines: {
          show: false
        }
      },
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: 30,
        borderRadius: 2,
      }
    },
    legend: {
      show: true,
      position: 'top',
      fontSize: '13px',
      fontFamily: '"Jost", sans-serif',
      fontWeight: 400,
      labels: {
        colors: '#747474',
      },
      markers: {
        width: 8,
        height: 8,
        radius: 20,
        offsetX: -4,
        offsetY: 0,
      },
    },
    tooltip: {
      enabled: true,
      enabledOnSeries: undefined,
      shared: true,
      followCursor: false,
      intersect: false,
      x: {
        show: true,
        format: 'dd MMM',
        formatter: undefined,
      },
      y: {
        formatter: undefined,
        title: {
          formatter: (seriesName) => seriesName,
        },
      },
      z: {
        formatter: undefined,
        title: 'Size: '
      },
      marker: {
        show: true,
      },
      fixed: {
        enabled: false,
        position: 'topLeft',
        offsetY: 0,
      },
      style: {
        fontSize: '12px',
        fontFamily: '"Jost", sans-serif',
      },
    },
    xaxis: {
      show: false,
      labels: {
        show: false,
      },
      axisBorder:{
        show: false,
      },
      axisTicks:{
        show:false,
      }
    },
    yaxis: {
      show: false,
      labels: {
        show: false,
      },
      axisBorder:{
        show: false,
      },
      axisTicks:{
        show:false,
      }
      
    },
  };
  if (document.querySelectorAll(className).length > 0) {
    new ApexCharts(document.querySelector(className), optionRadial).render();
  }
};

/* Area chart */
function areaChart(idName, height = "300", data, categories) {
  var optionRadial = {
    series: [{
      name: "Total Revenue",
      data: data,
      color: "#7811FF",
    }],
    chart: {
      height: height,
      type: 'area',
      parentHeightOffset: 0,
      toolbar: {
        show: false
      },
      animations: {
        enabled: true,
        easing: 'easeinout',
        speed: 800,
        animateGradually: {
          enabled: true,
          delay: 150
        },
        dynamicAnimation: {
          enabled: true,
          speed: 350
        }
      },
    },
    fill: {
      type: "gradient",
      gradient: {
        opacityFrom: 0.5,
        opacityTo: 0
      }
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      show: true,
      curve: 'smooth',
      lineCap: 'butt',
      colors: undefined,
      width: 3,
      dashArray: 0,
    },
    grid: {
      borderColor: '#485e9029',
      strokeDashArray: 5,
      padding: {
        top: 0,
        right: 0,
        bottom: 0,
      },
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: '60%',
        borderRadius: 2,
      }
    },
    legend: {
      show: false,
    },
    tooltip: {
      enabled: true,
      enabledOnSeries: undefined,
      shared: true,
      followCursor: false,
      intersect: false,
      x: {
        show: true,
        format: 'dd MMM',
        formatter: undefined,
      },
      y: {
        formatter: undefined,
        title: {
          formatter: (seriesName) => seriesName,
        },
      },
      marker: {
        show: true,
      },
      style: {
        fontSize: '12px',
        fontFamily: '"Jost", sans-serif',
      },
    },
    xaxis: {
      tooltip: {
        enabled: false
      },
      crosshairs: {
        show: false
      },
      labels: {
        style: {
          colors: Array.from({
            length: 12
          }, () => '#747474'),
          fontSize: '14px',
          fontFamily: '"Jost", sans-serif',
          fontWeight: 400,
          cssClass: 'apexcharts-yaxis-label',
        },
      },
      categories: categories,
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
    },
    yaxis: {
      labels: {
        offsetX: -15,
        formatter: (val) => {
          return val + "K";
        },
        style: {
          colors: ['#747474'],
          fontSize: '14px',
          fontFamily: '"Jost", sans-serif',
          fontWeight: 400,
          cssClass: 'apexcharts-yaxis-label',
        },
      },
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
    },
  };
  if (document.querySelectorAll(idName).length > 0) {
    new ApexCharts(document.querySelector(idName), optionRadial).render();
  }
};

function areaChartTwo(idName, width, height = "270") {
  var optionRadial = {
    series: [{
      data: [44, 55, 41, 64, 22, 43, 21]
    }],
    colors: ['#8231D3', '#00AAFF'],
    chart: {
      width: width,
      height: height,
      type: 'area',
      toolbar: {
        show: false,
      },
    },

    legend: {
      show: false
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'straight'
    },
    plotOptions: {
      bar: {
        borderRadius: 4,
        horizontal: true,
      }
    },
    dataLabels: {
      enabled: false
    },
    tooltip: {
      enabled: true,
      style: {
        fontSize: '14px',
        fontFamily: '"Jost", sans-serif',
      },
      tooltip: {
        custom: function ({
          series,
          seriesIndex,
          dataPointIndex,
          w
        }) {
          return (
            '<div class="arrow_box">' +
            "<span>" +
            w.globals.labels[dataPointIndex] +
            ": " +
            series[seriesIndex][dataPointIndex] +
            "</span>" +
            "</div>"
          );
        }
      },
      y: {
        formatter: (val) => {
          return val + "K";
        },
      },

    },
    grid: {
      borderColor: '#485e9029',
      strokeDashArray: 5,
      padding: {
        top: 0,
        right: 0,
        bottom: 0,
      },
    },
    xaxis: {
      crosshairs: {
        show: false
      },
      labels: {
        style: {
          colors: '#747474',
          fontSize: '14px',
          fontFamily: '"Jost", sans-serif',
          fontWeight: 400,
          cssClass: 'apexcharts-yaxis-label',
        },
      },
      tooltip: {
        enabled: false
      },
      axisBorder: {
        show: false

      },
      axisTicks: {
        show: false,
      },
      categories: [2001, 2002, 2003, 2004, 2005, 2006, 2007],
    },
    yaxis: {
      min: 0,
      max: 80,
      tickAmount: 4,
      labels: {
        offsetX: -15,
        formatter: (val) => {
          return val + "K";
        },
        style: {
          colors: ['#747474'],
          fontSize: '14px',
          fontFamily: '"Jost", sans-serif',
          fontWeight: 400,
          cssClass: 'apexcharts-yaxis-label',
        },

      },
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
    },

  };
  if (document.querySelectorAll(idName).length > 0) {
    new ApexCharts(document.querySelector(idName), optionRadial).render();
  }
};

function areaChartThree(idName, name, data, categories, height) {
  var optionRadial = {
    series: [{
      name: name,
      data: data,
    }],
    colors: ['#8231D3'],
    fill: {
      type: "gradient",
      gradient: {
        opacityFrom: 0.5,
        opacityTo: 0
      }
    },
    chart: {
      width: '100%',
      height: height,
      type: "area",
      parentHeightOffset: 0,
      toolbar: {
        show: false
      }
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      show: true,
      curve: 'smooth',
      lineCap: 'butt',
      colors: undefined,
      width: 3,
      dashArray: 0,
    },
    grid: {
      borderColor: '#485e9029',
      strokeDashArray: 5,
      padding: {
        top: 0,
        right: 0,
        bottom: 0,
      },
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: '60%',
        borderRadius: 2,
      }
    },
    legend: {
      show: false,
    },
    tooltip: {
      enabled: true,
      enabledOnSeries: undefined,
      shared: true,
      followCursor: false,
      intersect: false,
      x: {
        show: true,
        format: 'dd MMM',
        formatter: undefined,
      },
      y: {
        formatter: undefined,
        title: {
          formatter: (seriesName) => seriesName,
        },
      },
      marker: {
        show: true,
      },
      style: {
        fontSize: '12px',
        fontFamily: '"Jost", sans-serif',
      },
    },
    xaxis: {
      crosshairs: {
        show: false
      },
      labels: {
        style: {
          colors: Array.from({
            length: 12
          }, () => '#747474'),
          fontSize: '14px',
          fontFamily: '"Jost", sans-serif',
          fontWeight: 400,
          cssClass: 'apexcharts-yaxis-label',
        },
      },
      categories: categories,
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
    },
    yaxis: {
      labels: {
        offsetX: -15,
        formatter: (val) => {
          return val + "K";
        },
        style: {
          colors: ['#747474'],
          fontSize: '14px',
          fontFamily: '"Jost", sans-serif',
          fontWeight: 400,
          cssClass: 'apexcharts-yaxis-label',
        },
      },
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
    },

  };
  if (document.querySelectorAll(idName).length > 0) {
    new ApexCharts(document.querySelector(idName), optionRadial).render();
  }
};

function areaChartFour(idName, colors, name, data, categories, height) {
  var optionArea = {
    series: [{
      name: name,
      data: data,
    }],
    colors: colors,
    chart: {
      id: "chartLine",
      height: height,
      type: "line",
      parentHeightOffset: 0,
      toolbar: {
        show: false
      }
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      show: true,
      curve: 'smooth',
      lineCap: 'butt',
      colors: undefined,
      width: 3,
      dashArray: 0,
    },
    grid: {
      borderColor: '#485e9029',
      strokeDashArray: 5,
      padding: {
        top: 0,
        right: 0,
        bottom: 0,
      },
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: '60%',
        borderRadius: 2,
      }
    },
    legend: {
      show: false,
    },
    tooltip: {
      enabled: true,
      enabledOnSeries: undefined,
      shared: true,
      followCursor: false,
      intersect: false,
      x: {
        show: true,
        format: 'dd MMM',
        formatter: undefined,
      },
      y: {
        formatter: undefined,
        title: {
          formatter: (seriesName) => seriesName,
        },
      },
      marker: {
        show: true,
      },
      style: {
        fontSize: '12px',
        fontFamily: '"Jost", sans-serif',
      },
    },
    xaxis: {
      crosshairs: {
        show: false
      },
      labels: {
        style: {
          colors: Array.from({
            length: 12
          }, () => '#747474'),
          fontSize: '14px',
          fontFamily: '"Jost", sans-serif',
          fontWeight: 400,
          cssClass: 'apexcharts-yaxis-label',
        },
      },
      categories: categories,
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
    },
    yaxis: {
      labels: {
        offsetX: -15,
        formatter: (val) => {
          return val + "K";
        },
        style: {
          colors: ['#747474'],
          fontSize: '14px',
          fontFamily: '"Jost", sans-serif',
          fontWeight: 400,
          cssClass: 'apexcharts-yaxis-label',
        },
      },
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
    },
  };
  if (document.querySelectorAll(idName).length > 0) {
    new ApexCharts(document.querySelector(idName), optionArea).render();
  }
};

function areaChartFive(idName, height = "300", data, categories) {
  var optionRadial = {
    series: [
      {
        name: "Current Period",
        data: data,
        color: "#7811FF",
      },
      {
        name: "Current Period",
        data: [10, 19, 20, 45, 35, 50, 35, 70, 30, 40, 30, 53],
        color: "#bfb9d9",
      }
  ],
    chart: {
      height: height,
      type: 'area',
      parentHeightOffset: 0,
      toolbar: {
        show: false
      },
      animations: {
        enabled: true,
        easing: 'easeinout',
        speed: 800,
        animateGradually: {
          enabled: true,
          delay: 150
        },
        dynamicAnimation: {
          enabled: true,
          speed: 350
        }
      },
    },

    fill: {
      type: "gradient",
      gradient: {
        opacityFrom: 0.5,
        opacityTo: 0
      }
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      show: true,
      curve: 'smooth',
      lineCap: 'butt',
      colors: undefined,
      width: [3, 2],
      dashArray: [0, 3]
    },
    grid: {
      borderColor: '#485e9029',
      strokeDashArray: 5,
      padding: {
        top: 0,
        right: 0,
        bottom: 0,
      },
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: '60%',
        borderRadius: 2,
      }
    },
    legend: {
      show: false,
    },
    tooltip: {
      enabled: true,
      enabledOnSeries: undefined,
      shared: false,
      followCursor: false,
      intersect: false,
      x: {
        show: true,
        format: 'dd MMM',
        formatter: undefined,
      },
      y: {
        formatter: undefined,
        title: {
          formatter: (seriesName) => seriesName,
        },
      },
      marker: {
        show: true,
      },
      style: {
        fontSize: '12px',
        fontFamily: '"Jost", sans-serif',
      },
    },
    xaxis: {
      tooltip: {
        enabled: false
      },
      crosshairs: {
        show: false
      },
      labels: {
        style: {
          colors: Array.from({
            length: 12
          }, () => '#747474'),
          fontSize: '14px',
          fontFamily: '"Jost", sans-serif',
          fontWeight: 400,
          cssClass: 'apexcharts-yaxis-label',
        },
      },
      categories: categories,
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
    },
    yaxis: {
      labels: {
        offsetX: -15,
        formatter: (val) => {
          return val + "K";
        },
        style: {
          colors: ['#747474'],
          fontSize: '14px',
          fontFamily: '"Jost", sans-serif',
          fontWeight: 400,
          cssClass: 'apexcharts-yaxis-label',
        },
      },
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
    },
  };
  if (document.querySelectorAll(idName).length > 0) {
    new ApexCharts(document.querySelector(idName), optionRadial).render();
  }
};

/* Pie chart */
function pieChart(idName, series, width) {
  var optionsPie = {
    series: series,
    labels: ['Facebook', 'Twitter', 'Google'],
    colors: ['#8231D3', '#00AAFF', '#5840FF'],
    chart: {
      type: 'pie',
      group: 'social',
      width: width,
      height: 270,
      toolbar: {
        show: false,
      },
    },
    legend: {
      show: false,
      position: 'bottom',
      horizontalAlign: 'center',
      floating: false,
      fontSize: '15px',
      fontFamily: 'Jost, sans-serif',
      fontWeight: 400,
      labels: {
        colors: '#525768',
      },
      markers: {
        width: 7,
        height: 7,
        radius: 20,
        offsetX: -4,
      },
      itemMargin: {
        horizontal: 10,
        vertical: 10,
      },
      onItemClick: {
        toggleDataSeries: true
      },
      onItemHover: {
        highlightDataSeries: true
      },
    },
    plotOptions: {
      pie: {
        dataLabels: {
          minAngleToShowLabel: undefined
        },
      }
    },
    responsive: [{
      breakpoint: 1399,
      options: {
        chart: {
          width: "100%"
        },

      }
    }]
  };
  if (document.querySelectorAll(idName).length > 0) {
    new ApexCharts(document.querySelector(idName), optionsPie).render();
  }
};

/* Line chart */
function lineChart(idName, width, height = "245") {
  var optionRadial = {
    chart: {
      width: width,
      height: height,
      type: 'line',
      toolbar: {
        show: false,
      },
      animations: {
        enabled: true,
        easing: 'easeinout',
        speed: 800,
        animateGradually: {
          enabled: true,
          delay: 150
        },
        dynamicAnimation: {
          enabled: true,
          speed: 350
        }
      },
    },
    colors: ['#7811FF', '#00AAFF'],
    dataLabels: {
      enabled: false,
    },
    stroke: {
      show: true,
      curve: 'smooth',
      lineCap: 'butt',
      colors: undefined,
      width: 3,
      dashArray: 0,
    },
    legend: {
      show: false,
    },
    tooltip: {
      enabled: true,
      style: {
        fontSize: '14px',
        fontFamily: '"Jost", sans-serif',
      },
      tooltip: {
        custom: function ({
          series,
          seriesIndex,
          dataPointIndex,
          w
        }) {
          return (
            '<div class="arrow_box">' +
            "<span>" +
            w.globals.labels[dataPointIndex] +
            ": " +
            series[seriesIndex][dataPointIndex] +
            "</span>" +
            "</div>"
          );
        }
      },
      y: {
        formatter: (val) => {
          return val + "K";
        },
      },

    },
    grid: {
      borderColor: '#485e9029',
      strokeDashArray: 5,
      padding: {
        top: 0,
        right: 0,
        bottom: 0,
      },
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: '60%',
        borderRadius: 2,
      }
    },
    series: [{
      name: "Total Order",
      data: [10, 55, 42, 30, 42, 80, 35, 10, 53, 62, 45, 78],
      color: "#7811FF",
    }, {
      name: "Total Sales",
      data: [30, 45, 35, 10, 5, 60, 8, 42, 30, 70, 54, 25],
      color: "#00AAFF",
    }],

    xaxis: {
      crosshairs: {
        show: false
      },
      labels: {
        style: {
          colors: '#747474',
          fontSize: '14px',
          fontFamily: '"Jost", sans-serif',
          fontWeight: 400,
          cssClass: 'apexcharts-yaxis-label',
        },
      },
      categories: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
      ],
      axisBorder: {
        show: false

      },
      axisTicks: {
        show: false,
      },
      tooltip: {
        enabled: false
      },
    },

    yaxis: {
      min: 0,
      max: 80,
      tickAmount: 4,
      labels: {
        offsetX: -15,
        formatter: (val) => {
          return val + "K";
        },
        style: {
          colors: ['#747474'],
          fontSize: '14px',
          fontFamily: '"Jost", sans-serif',
          fontWeight: 400,
          cssClass: 'apexcharts-yaxis-label',
        },

      },
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
    },
  };
  if (document.querySelectorAll(idName).length > 0) {
    new ApexCharts(document.querySelector(idName), optionRadial).render();
  }
};

/* Polar chart */
function donutChart(idName, TotalSales, TotalLabels, series1, labels1, series2, labels2, series3, labels3, ) {
  var optionDonut = {
    series: TotalSales,
    labels: TotalLabels,
    colors: ['#8231D3', '#00AAFF', '#FA8B0C'],
    chart: {
      type: 'donut',
      group: 'social',
      width: '100%',
      height: '300px',
    },
    legend: {
      show: true,
      position: 'bottom',
      horizontalAlign: 'center',
      floating: false,
      fontSize: '15px',
      fontFamily: 'Jost, sans-serif',
      fontWeight: 500,
      labels: {
        colors: 'text-theme-dark dark:text-subtitle-dark',
      },
      markers: {
        width: 7,
        height: 7,
        radius: 20,
        offsetX: -4,
      },
      itemMargin: {
        horizontal: 10,
        vertical: 10
      },
      onItemClick: {
        toggleDataSeries: true
      },
      onItemHover: {
        highlightDataSeries: true
      },
    },
    plotOptions: {
      pie: {
        dataLabels: {
          minAngleToShowLabel: undefined
        },
        donut: {
          size: '60%',
          labels: {
            show: true,
            name: {
              show: true,
              fontSize: '16px',
              fontFamily: 'Jost, sans-serif',
              color: '#404040',
              offsetY: -10
            },
            value: {
              show: true,
              fontSize: '30px',
              fontFamily: 'Jost, sans-serif',
              color: "black",
              fontWeight: "bold",
              offsetY: 10,
              formatter: function (val) {
                return +val + "K"
              }
            },
            total: {
              show: true,
              label: 'Total',
              color: '#404040',
              fontFamily: 'Jost, sans-serif',
              formatter: function (w) {
                return w.globals.seriesTotals.reduce((a, b) => {
                  return a + b
                }, 0)
              }
            }
          }
        },
      },
    },
    responsive: [{
      breakpoint: 1399,
      options: {
        chart: {
          width: "100%"
        },

      }
    }]
  };
  if (document.querySelectorAll(idName).length > 0) {
    new ApexCharts(document.querySelector(idName), optionDonut).render();
    document.getElementById(series1).innerText = optionDonut.series[0] + 'K';
    document.getElementById(labels1).innerText = optionDonut.labels[0];
    document.getElementById(series2).innerText = optionDonut.series[1] + 'K';
    document.getElementById(labels2).innerText = optionDonut.labels[1];
    document.getElementById(series3).innerText = optionDonut.series[2] + 'K';
    document.getElementById(labels3).innerText = optionDonut.labels[2];
  }
}

function donutChart2(idName) {
  var optionDonut = {
    series: [90, 80, 70],
    labels: ['Target', 'Completed', 'In Progress'],
    colors: ['#8231D3', '#00AAFF', '#FA8B0C'],
    chart: {
      width: '100%',
      height: 275,
      type: 'radialBar',
      sparkline: {
        enabled: true
      },
    },
    legend: {
      show: true,
      position: 'right',
      horizontalAlign: 'center',
      offsetY: 60,
      offsetX: 10,
      fontSize: '15px',
      fontFamily: '"Jost", sans-serif',
      fontWeight: 400,
      labels: {
        colors: '#404040',
      },
      markers: {
        width: 6,
        height: 6,
        radius: 20,
        offsetX: -4,
        offsetY: -2,
      },
      itemMargin: {
        horizontal: 10,
        vertical: 5
      }
    },
    plotOptions: {
      radialBar: {
        hollow: {
          margin: 0,
          size: '30%',
        },
        track: {
          show: true,
          margin: 11
        },
        dataLabels: {
          show: true,
          name: {
            offsetY: 20
          },
          value: {
            show: true,
            fontSize: '24px',
            fontFamily: '"Jost", sans-serif',
            fontWeight: 600,
            offsetY: -21
          },
          total: {
            show: true,
            label: 'Completed',
            fontSize: '15px',
            fontFamily: '"Jost", sans-serif',
            fontWeight: 400,
            color: '#404040',
            formatter: function (w) {
              return '60%';
            }
          }
        }
      }
    },
    stroke: {
      lineCap: 'round'
    },
    grid: {
      show: true,
      padding: {
        top: 0,
        right: 0,
        bottom: 0,
        left: 0
      }
    },
    responsive: [{
      breakpoint: 575,
      options: {
        legend: {
          show: false
        },
        plotOptions: {
          radialBar: {
            hollow: {
              margin: 0,
              size: '30%',
            },
            track: {
              show: true,
              margin: 11
            },
            dataLabels: {
              show: true,
              name: {
                offsetY: 20
              },
              value: {
                show: true,
                fontSize: '18px',
                fontFamily: '"Jost", sans-serif',
                fontWeight: 600,
                offsetY: -21
              },
              total: {
                show: true,
                label: 'Completed',
                fontSize: '12px',
                fontFamily: '"Jost", sans-serif',
                fontWeight: 400,
                color: '#404040',
                formatter: function (w) {
                  return '60%';
                }
              }
            }
          }
        },
      }
    }],
  };
  if (document.querySelectorAll(idName).length > 0) {
    new ApexCharts(document.querySelector(idName), optionDonut).render();
  }
}

function donutChart3(idName) {
  var optionDonut = {
    series: [90],
    colors: ['#8231D3'],
    chart: {
      width: 65,
      height: 65,
      type: 'radialBar',
      parentHeightOffset: 0,
      sparkline: {
        enabled: true
      },
    },
    legend: {
      show: false,
    },
    plotOptions: {
      radialBar: {
        hollow: {
          margin: 0,
          size: '30%',
        },
        track: {
          show: true,
          margin: 9
        },
        dataLabels: {
          show: false,
        }
      }
    },
    stroke: {
      lineCap: 'round'
    },
    grid: {
      show: true,
      padding: {
        top: 0,
        right: 0,
        bottom: 0,
        left: 0
      }
    },
    responsive: [{
      breakpoint: 575,
      options: {
        legend: {
          show: false
        },
        plotOptions: {
          radialBar: {
            hollow: {
              margin: 0,
              size: '30%',
            },
            track: {
              show: true,
              margin: 11
            },
            dataLabels: {
              show: true,
              name: {
                offsetY: 20
              },
              value: {
                show: true,
                fontSize: '18px',
                fontFamily: '"Jost", sans-serif',
                fontWeight: 600,
                offsetY: -21
              },
              total: {
                show: true,
                label: 'Completed',
                fontSize: '12px',
                fontFamily: '"Jost", sans-serif',
                fontWeight: 400,
                color: '#404040',
                formatter: function (w) {
                  return '60%';
                }
              }
            }
          }
        },
      }
    }],
  };
  if (document.querySelectorAll(idName).length > 0) {
    new ApexCharts(document.querySelector(idName), optionDonut).render();
  }
}

function donutChart4(idName) {
  const completedValue = 123456;
  const inProgressValue = 12498;
  const totalTasks = completedValue + inProgressValue;
  const completedPercentage = (completedValue / totalTasks) * 100;
  const totalNumber = completedPercentage;
  var optionDonut = {
    series: [completedPercentage],
    colors: ['#8231D3'],
    chart: {
      width: '100%',
      height: 275,
      type: 'radialBar',
      sparkline: {
        enabled: true
      },
    },
    legend: {
      show: false,
    },
    plotOptions: {
      radialBar: {
        hollow: {
          margin: 15,
          size: '70%',
        },
        dataLabels: {
          show: true,
          name: {
            show: false,
          },
          value: {
            show: true,
            fontSize: '45px',
            fontFamily: '"Jost", sans-serif',
            fontWeight: 600,
            color: "#8231D3",
            formatter: function (w) {
              return totalNumber.toFixed(0) + `%`;
            }
          },
          total: {
            show: false,
          }
        }
      }
    },
    stroke: {
      lineCap: 'round'
    },
    grid: {
      show: true,
      padding: {
        top: 0,
        right: 0,
        bottom: 0,
        left: 0
      }
    },
    responsive: [{
      breakpoint: 575,
      options: {
        legend: {
          show: false
        },
        plotOptions: {
          radialBar: {
            hollow: {
              margin: 0,
              size: '60%',
            },
          }
        },
      }
    }],
  };
  if (document.querySelectorAll(idName).length > 0) {
    new ApexCharts(document.querySelector(idName), optionDonut).render();
    document.getElementById('completedValue').innerText = completedValue;
    document.getElementById('inProgressValue').innerText = inProgressValue;
  }
}

function donutChart5(idName) {
  var optionDonut = {
    series: [30, 30, 40],
    labels: ['Target', 'In Progress', 'Completed'],
    colors: ['#8231D3', '#00AAFF', '#FA8B0C'],
    chart: {
      width: '100%',
      height: 298,
      type: 'donut',
    },
    legend: {
      show: true,
      position: 'bottom',
      horizontalAlign: 'center',
      offsetY: 0,
      offsetX: 0,
      fontSize: '15px',
      fontFamily: '"Jost", sans-serif',
      fontWeight: 400,
      labels: {
        colors: '#404040',
      },
      markers: {
        width: 6,
        height: 6,
        radius: 20,
        offsetX: -4,
        offsetY: -2,
      },
      itemMargin: {
        horizontal: 10,
        vertical: 5
      }
    },
    plotOptions: {
      pie: {
        dataLabels: {
          minAngleToShowLabel: undefined
        },
        donut: {
          size: "80%",
          labels: {
            show: true,
            name: {
              show: true,
              fontSize: '16px',
              fontFamily: 'Jost, sans-serif',
              color: '#404040',
              offsetY: -10
            },
            value: {
              show: true,
              fontSize: '30px',
              fontFamily: 'Jost, sans-serif',
              color: "black",
              fontWeight: "bold",
              offsetY: 10,
              formatter: function (val) {
                return +val + "K"
              }
            },
            total: {
              show: true,
              label: 'Total',
              color: '#404040',
              fontFamily: 'Jost, sans-serif',
              formatter: function (w) {
                return w.globals.seriesTotals.reduce((a, b) => {
                  return a + b
                }, 0)
              }
            }
          }
        },
      },
    },
    responsive: [{
      breakpoint: 1399,
      options: {
        chart: {
          width: "100%"
        },

      }
    }],
  };
  if (document.querySelectorAll(idName).length > 0) {
    new ApexCharts(document.querySelector(idName), optionDonut).render();
  }
}

// Index Page = Sales Report
lineChart('.salesReport', '100%', 245);
// Index Page = Sales Growth
barChart('.salesGrowthToday', '100%', 311, [35, 55, 25, 60, 42, 80, 35], [10, 30, 8, 30, 22, 38, 45], ["Sat", "Sun", "Mon", "Tue", "Wed", "Thu", "Fri"], '60%');
// Index Page = Sales Growth
barChart('.salesGrowthWeek', '100%', 311, [12, 34, 76, 23, 48, 34, 78], [34, 25, 34, 8, 45, 65, 18], ["1-2", "2-3", "3-4", "4-5", "5-6", "6-7", "7-8", ],
  '60%');
// Index Page = Sales Growth
barChart('.salesGrowthMonth', '100%', 311, [35, 55, 25, 72, 45, 58, 35, 45, 65, 38, 45, 48], [15, 35, 10, 16, 25, 44, 10, 5, 24, 18, 7, 36], [
  "Jan",
  "Feb",
  "Mar",
  "Apr",
  "May",
  "Jun",
  "Jul",
  "Aug",
  "Sep",
  "Oct",
  "Nov",
  "Dec",
], '95%');

// Demo Two = source of revenue
pieChart('.pieChart', [20, 20, 60], '100%', 270);
// Demo Two = Sale toady
areaChart('.salesRevenueToday', '300', [0, 30, 25, 50, 40, 55, 40, 75, 35, 40, 35, 58], ['2(h)', '4(h)', '6(h)', '8(h)', '10(h)', '12(h)', '14(h)', '16(h)', '18(h)', '20(h)', '22(h)', '24(h)']);
// Demo Two = Sale Week
areaChart('.salesRevenueWeek', '300', [25, 30, 35, 20, 25, 40, 35], ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']);
// Demo Two = Sale Month
areaChart('.salesRevenueMonth', '300', [20, 36, 25, 50, 40, 55, 40, 75, 35, 40, 35, 58], ['Jan', 'Feb', 'Mar', 'App', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Nov', 'Oct', 'Dec']);
//Social Page - General Statistics
areaChartFive('.statisticsCharts', '300', [20, 39, 30, 55, 45, 60, 45, 80, 40, 50, 40, 63], ['Jan', 'Feb', 'Mar', 'App', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Nov', 'Oct', 'Dec']);

//Demo three = Money earning
areaChartThree('.chartLineToday', 'Total Revenue', [0, 30, 25, 50, 40, 55, 40, 75, 35, 40, 35, 58], ['2(h)', '4(h)', '6(h)', '8(h)', '10(h)', '12(h)', '14(h)', '16(h)', '18(h)', '20(h)', '22(h)', '24(h)'], 350);
areaChartThree('.chartLineWeek', 'Total Revenue', [25, 30, 35, 20, 25, 40, 35], ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'], 350);
areaChartThree('.chartLineMonth', 'Total Revenue', [20, 36, 25, 50, 40, 55, 40, 75, 35, 40, 35, 58], ['Jan', 'Feb', 'Mar', 'App', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Nov', 'Oct', 'Dec'], 350);

// Apex-chart = Bar chart
demoBar('.demoBarChart', '100%', 280);
// Apex-chart = Group chart
groupBarChart('.demoGroupedBarChart', '100%', 280);
// Apex-chart = Area chart
areaChartTwo('.demoAreaChartBasic', '100%', 267);
//Demo three = Profile Growth
singleBarChart('.profileGrowth');
//Demo three = Sales Overview
donutChart('.salesOverviewToday', [47, 34, 19], ["Shirts", "Pants", "Footwears"], 'series1Today', 'labels1Today', 'series2Today', 'labels2Today', 'series3Today', 'labels3Today');
donutChart('.salesOverviewWeek', [50, 60, 30], ["Tops", "Bottoms", "Shoes"], 'series1Week', 'labels1Week', 'series2Week', 'labels2Week', 'series3Week', 'labels3Week');
donutChart('.salesOverviewMonth', [80, 70, 50], ["T-Shirts", "Jeans", "Sneakers"], 'series1Month', 'labels1Month', 'series2Month', 'labels2Month', 'series3Month', 'labels3Month');

//Demo Four
donutChart2('.performanceOver')
//Demo Six
donutChart4('.salesOverview-two')
//demo nine
donutChart5('.salesOverviewElement')

// Index Page = Sales Growth
barChart2('.uvBarToday', [35, 55, 25, 60, 42, 80, 35], [10, 30, 8, 30, 22, 38, 45], 368, [
  "Sat",
  "Sun",
  "Mon",
  "Tue",
  "Wed",
  "Thu",
  "Fri"
]);
// Index Page = Sales Growth
barChart2('.uvBarWeek', [12, 34, 76, 23, 48, 34, 78], [34, 25, 34, 8, 45, 65, 18], 368, [
  "1-2",
  "2-3",
  "3-4",
  "4-5",
  "5-6",
  "6-7",
  "7-8",
]);
// Index Page = Sales Growth
barChart2('.uvBarMonth', [35, 55, 25, 72, 45, 58, 35, 45, 65, 38, 45, 48], [15, 35, 10, 16, 25, 44, 10, 5, 24, 18, 7, 36], 368, [
  "Jan",
  "Feb",
  "Mar",
  "Apr",
  "May",
  "Jun",
  "Jul",
  "Aug",
  "Sep",
  "Oct",
  "Nov",
  "Dec",
]);

// Social Profile
profileBarChart('.profileProducts', 'Products', [35, 55, 25, 60, 42, 80, 35], '#7811FF', '120');
profileBarChart('.profileRevenue', 'Revenue', [10, 30, 8, 30, 22, 38, 45], '#5840FF', '120');
profileBarChart('.profileProductSold', 'Product Sold', [35, 55, 25, 60, 42, 80, 35], '#01B81A', '120');

//Demo Six
areaChartFour('.totalSales', ['#8231D3'], 'Total sales', [0, 26, 15, 50, 40, 55, 40, 55, 35, 80], [
  "Jan",
  "Feb",
  "Mar",
  "Apr",
  "May",
  "Jun",
  "Jul",
  "Aug",
  "Sep",
  "Oct",
], 300);
areaChartFour('.totalOrders', ['#FA8B0C'], 'Total Orders', [38, 55, 42, 36, 60, 65, 50], [
  "Sat", "Sun", "Mon", "Tue", "Wed", "Thu", "Fri"
], 300);

areaChartFour('.totalSubscribers', ['#01B81A'], 'Total Subscribers', [40, 48, 40, 46, 38, 65, 58, 59], [
  "2014",
  "2015",
  "2016",
  "2017",
  "2018",
  "2019",
  "2020",
  "2021"
], 300);