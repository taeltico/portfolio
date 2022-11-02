#include

#include

int main()
{
    float v1;
    float v2;
    char op;
    float resultado;

    //  inserindo dados//
    printf("Entre com o primeiro valor: ");
    scanf("%f", &v1);

    printf("Entre com o operador desejado");
    scanf(" %c", &op);

    printf("Entre com o segundo valor: ");
    scanf("%f", &v2);

    //printf("%f %c %f", v1, op, v2);//

    // imprimindo resultados//

    if (op == '+'){
        resultado = v1 + v2;
                
    }
    else if(op == '-'){
        resultado = v1 - v2;

    }
    else if(op == '*'){
        resultado = v1 * v2;
    
    }
    else if(op == '/'){
        resultado = v1 / v2;

    }
    else {
        resultado = ("operador inválido")
        return 1;

    }
    
    printf("o resultado foi: %f", resultado);
    return 0;


}