async function fetchWeather() {
    try {
      const responce = await fetch("rating.json");
      const data = await responce.json();
      const tablebody = document.getElementById("table-body1");
      data.forEach((element) => {
        const row = tablebody.insertRow();
        const titlecell = row.insertCell(0);
        const contentcell = row.insertCell(1);
        const datecell = row.insertCell(2);
        titlecell.innerHTML = element.title;
        contentcell.innerHTML = element.content;
        datecell.innerHTML = element.date;
      });
    } catch (error) {
      console.log(error);
    }
  }
  window.onload = fetchWeather();
  