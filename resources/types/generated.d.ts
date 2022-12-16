declare namespace App.Http.Controllers {
export type Language = 'en' | 'nl' | 'fr' | 'it';
export type TestTypescript = {
string: string;
int: number;
float: number;
language: App.Http.Controllers.Language;
};
}
