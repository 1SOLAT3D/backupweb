(async () => {
    let headersList = {"Accept": "*/*" }
    let response = await fetch("http://localhost/martinezci/ProgramacionWeb/Parcial3/GridJS/GridJS.php",{
        method: "GET",
        headers: headersList
    });

    let datos = await response.json();
    console.log(datos);

    new gridjs.Grid({
        columns: ["idEquipo", "idRegion", "nombreEquipo", "acronimo", "paisEquipo", "seed"],
        data: datos
    }).render(document.getElementById("wrapper"));
})();

