/**
 * @license
 * Copyright Google Inc. All Rights Reserved.
 *
 * Use of this source code is governed by an MIT-style license that can be
 * found in the LICENSE file at https://angular.io/license
 */
import { Injector, InjectionToken } from '@angular/core';
import { MdDialogRef } from './dialog-ref';
export declare const MD_DIALOG_DATA: InjectionToken<any>;
/** Custom injector type specifically for instantiating components with a dialog. */
export declare class DialogInjector implements Injector {
    private _parentInjector;
    private _dialogRef;
    private _data;
    constructor(_parentInjector: Injector, _dialogRef: MdDialogRef<any>, _data: any);
    get(token: any, notFoundValue?: any): any;
}
