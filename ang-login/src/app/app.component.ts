import { Component } from '@angular/core';
import { HttpClient, HttpErrorResponse, HttpParams } from '@angular/common/http';
import { Observable } from 'rxjs';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'ang-login';
  constructor(private http: HttpClient) {
  }
  sendPost(email: any, password: any): Observable<any> {
    console.log(email);
    console.log(password);
    return this.http.post("http://localhost/webplmadness/backend_login.php", email, { responseType: 'text' });
  }
  subPost(data: any, data2: any) {
    console.log(data)
    this.sendPost(data, data2).subscribe(
      res => {
        console.log(res);
      }
    );
  }
}
