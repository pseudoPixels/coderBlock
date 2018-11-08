include <stdio.h>
#include <conio.h>

 
int main(){
  int i=1,j=5,k=9;
  
  for(i=1;i<=j;i++){
  
   for(k=1;k<=i;k++){
    printf("%d ",k);
   }
   printf("\n");
  }
  



  getch();
  return 0;
  
  
}
