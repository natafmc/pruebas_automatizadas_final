

Feature: IMPRIMIR TICKET

    Scenario: Imprimir ticket de caja
        Given Visitar categoria zona        
        And Presionar boton IMPRIMIR
        Then Imprime un ticket