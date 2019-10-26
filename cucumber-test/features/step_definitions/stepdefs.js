const assert = require('assert');
const { Given, When, Then } = require('cucumber');
const { Builder, By, Key, untill } = require('selenium-webdriver')

const site = "http://localhost/pruebas_automatizadas_final/Login/loginAdmin"
const ticketUrl = "http://localhost/pruebas_automatizadas_final/Ticketero/categoriasZona/1"

let dDriver = new Builder()
    .forBrowser('firefox')
    .build()
let dDriverTicket = new Builder()
    .forBrowser('firefox')
    .build()
let bBy = By
let kKey = Key
let uUntil = untill

Given('Visitar TOMATURN', { timeout: 10 * 1000 }, function () {
    return dDriver.get(site);
})

Then('El titulo debe decir TOMATURN', { timeout: 60 * 1000 }, function () {

    dDriver.getTitle().then(function (title) {
        assert.equal(title, "TICK[ET]")
        return title
    })
})

Given('Agregar credenciales e ingresar', { timeout: 60 * 1000 }, function () {
    dDriver.findElement(bBy.name('username')).sendKeys('romina.medrano', kKey.RETURN)
    dDriver.findElement(bBy.name('password')).sendKeys('romina.medrano', kKey.RETURN)
    return dDriver.findElement(bBy.className('btn btn-lg btn-primary btn-block')).click()
});
Then('Mostrar Panel de Admin', { timeout: 60 * 1000 }, function () {
    async function loadPage() {
        canvas.click()
    }
})


// 
Given('Visitar categoria zona', { timeout: 60 * 1000 }, function () {
    // Write code here that turns the phrase above into concrete actions
    return dDriverTicket.get(ticketUrl)
});
Given('Presionar boton IMPRIMIR', { timeout: 60 * 1000 }, function () {
    dDriverTicket.findElement(bBy.id('print')).click()
});

Then('Imprime un ticket', { timeout: 60 * 1000 }, function () {
    async function loadPage() {
        canvas.click()
    }
});
