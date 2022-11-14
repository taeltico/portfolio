#include

#include

int main()
{
    float v1;
    float v2;
    char op;
    float resultado;


    // imprimindo resultados//
    printf("entre com a equação: ")
    scanf("%f %c %f", v1, op, v2)

    switch(op){

        case '+':
            resultado = v1 + v2;

            break;
        case '-':
            resultado = v1 - v2;

            break;
        case '*':
            resultado = v1 * v2;

            break;
        case '/':
            resultado = v1 / v2;
            break;
        default:
            resultado = ("operador inválido")
        return 1;
            

    }
}