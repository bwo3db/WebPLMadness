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
  sendPost(data: any): Observable<any> {
    console.log(data);
    return this.http.post("http://localhost/webplmadness/backend_login.php", data, { responseType: 'text' });
  }
  subPost(data: any) {
    console.log(data)
    this.sendPost(data).subscribe(
      res => {
        console.log(res);
      }
    );
  }
}
