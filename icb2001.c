#include <stdio.h>

int main(){
    int testCase;
    int i;
    int num1, num2;
    scanf("%d",&testCase);
    
    for(i=0;i<testCase;i++){
      scanf("%d %d",&num1, &num2);
      if(num1==num2)printf("=\n");
      if(num1>num2)printf(">\n");
      if(num1<num2)printf("<\n");
    }    
    
    
    
    
    return 0;
}
