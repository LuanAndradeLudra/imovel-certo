var totalEducations = 1;
var totalGastronomy = 1;


function removeNewElementInfo(labelInfo) {
    totalEducations--;
    const selectedInfo = document.querySelector("#"+labelInfo+"-additional");
    selectedInfo.removeChild(selectedInfo.lastChild);
    if (totalEducations <= 1) {
        document.querySelector("#"+labelInfo+"-additional-minus").setAttribute("disabled", true)
    }
}

function addNewElementInfo(labelInfo) {
    totalEducations++
    let idInfo = labelInfo+"-additional-info-" + totalEducations
    const row = createNewDiv(["row"])

    const infoDiv = createNewDiv(["col-lg-9"])
    const infoGroup = createNewDiv(["form-group"])
    infoGroup.append(createNewLabel("Informação"))
    infoGroup.append(createNewInput(idInfo, "Digite a informação"))
    infoDiv.append(infoGroup)

    row.append(infoDiv)

    idInfo = labelInfo+"-additional-distance-" + totalEducations
    const distanceDiv = createNewDiv(["col-lg-3"])
    const distanceGroup = createNewDiv(["form-group"])
    distanceGroup.append(createNewLabel("Distância"))
    distanceGroup.append(createNewInput(idInfo, "Digite a distância"))

    distanceDiv.append(distanceGroup)

    row.append(distanceDiv)
    document.querySelector("#"+labelInfo+"-additional").append(row)
    if (totalEducations > 1) {
        document.querySelector("#"+labelInfo+"-additional-minus").removeAttribute("disabled")
    }
}

function createNewDiv(classes) {
    const myDiv = document.createElement("div")
    for (let i = 0; i < classes.length; i++) {
        myDiv.classList.add(classes[i])
    }
    return myDiv
}

function createNewLabel(text) {
    const myLabel = document.createElement("label")
    myLabel.innerHTML = text
    return myLabel
}

function createNewInput(id, placeholder) {
    const myInput = document.createElement("input")
    myInput.classList.add("form-control")
    myInput.setAttribute("id", id)
    myInput.setAttribute("name", id)
    myInput.setAttribute("placeholder", placeholder)
    return myInput
}