function CoefFuncs( itype ){
    switch( itype ){
        case 0:
            Divnd_1 = ( 2 * Fs * tao_1 + 1.0 );
            b0_1 = K_1*(1.0)/Divnd_1;
            b1_1 = K_1*(1.0)/Divnd_1;
            b2_1 = 0.0/Divnd_1;
            a1_1 = (1.0-2*Fs*tao_1)/Divnd_1;
            a2_1 = 0.0/Divnd_1;
            ///
            ///
            //
            //
            //
            //
            //
            ///
            Divnd_1_C = (- 2*Fs - 4*Fds_1*Fs*Fs - 4*Fs*Fs*tao_1 - K_1*Ki_1 - 2*Fs*K_1*Kp_1 - 4*Fs*Fs*K_1*Kd_1 - 8*Fds_1*Fs*Fs*Fs*tao_1 - 2*Fds_1*Fs*K_1*Ki_1 - 4*Fds_1*Fs*Fs*K_1*Kp_1);
            //
            //
            //
            //
            b0_1_C    = (- K_1*Ki_1 - 2*Fs*K_1*Kp_1 - 4*Fs*Fs*K_1*Kd_1 - 2*Fds_1*Fs*K_1*Ki_1 - 4*Fds_1*Fs*Fs*K_1*Kp_1)/Divnd_1_C;
            b1_1_C    = (4*Fs*Fs*K_1*Kd_1 - 2*Fs*K_1*Kp_1 - 3*K_1*Ki_1 - 2*Fds_1*Fs*K_1*Ki_1 + 4*Fds_1*Fs*Fs*K_1*Kp_1)/Divnd_1_C;
            b2_1_C    = (2*Fs*K_1*Kp_1 - 3*K_1*Ki_1 + 4*Fs*Fs*K_1*Kd_1 + 2*Fds_1*Fs*K_1*Ki_1 + 4*Fds_1*Fs*Fs*K_1*Kp_1)/Divnd_1_C;
            b3_1_C    = ( 2*Fs*K_1*Kp_1 - K_1*Ki_1 - 4*Fs*Fs*K_1*Kd_1 + 2*Fds_1*Fs*K_1*Ki_1 - 4*Fds_1*Fs*Fs*K_1*Kp_1 )/Divnd_1_C;
            b4_1_C = 0;
            //
            //
            //
            //
            a1_1_C    = (4*Fds_1*Fs*Fs - 2*Fs + 4*Fs*Fs*tao_1 - 3*K_1*Ki_1 - 2*Fs*K_1*Kp_1 + 4*Fs*Fs*K_1*Kd_1 + 24*Fds_1*Fs*Fs*Fs*tao_1 - 2*Fds_1*Fs*K_1*Ki_1 + 4*Fds_1*Fs*Fs*K_1*Kp_1)/Divnd_1_C;
            a2_1_C    = (2*Fs + 4*Fds_1*Fs*Fs + 4*Fs*Fs*tao_1 - 3*K_1*Ki_1 + 2*Fs*K_1*Kp_1 + 4*Fs*Fs*K_1*Kd_1 - 24*Fds_1*Fs*Fs*Fs*tao_1 + 2*Fds_1*Fs*K_1*Ki_1 + 4*Fds_1*Fs*Fs*K_1*Kp_1)/Divnd_1_C;
            a3_1_C    = (2*Fs - 4*Fds_1*Fs*Fs - 4*Fs*Fs*tao_1 - K_1*Ki_1 + 2*Fs*K_1*Kp_1 - 4*Fs*Fs*K_1*Kd_1 + 8*Fds_1*Fs*Fs*Fs*tao_1 + 2*Fds_1*Fs*K_1*Ki_1 - 4*Fds_1*Fs*Fs*K_1*Kp_1)/Divnd_1_C;
            a4_1_C = 0;
            ///
            ///
            ///
            break;
        case 1:
            Divnd_1 = (4*Fs*Fs + 4*zeta_1*Fs*wn_1 + wn_1*wn_1);
            b0_1 = (wn_1*wn_1)/Divnd_1;
            b1_1 = (2*wn_1*wn_1)/Divnd_1;
            b2_1 = (wn_1*wn_1)/Divnd_1;
            a1_1 = (2*wn_1*wn_1 - 8*Fs*Fs)/Divnd_1;
            a2_1 = (4*Fs*Fs - 4*zeta_1*Fs*wn_1 + wn_1*wn_1)/Divnd_1;
            ///
            ///
            //
            //
            //
            //
            //
            ///
            Divnd_1_C = (16*Fds_1*Fs*Fs*Fs*Fs+ 2*Fs*wn_1*wn_1 + 8*Fs*Fs*Fs + 4*Fds_1*Fs*Fs*wn_1*wn_1 + K_1*Ki_1*wn_1*wn_1 + 8*Fs*Fs*wn_1*zeta_1 + 2*Fs*K_1*Kp_1*wn_1*wn_1 + 16*Fds_1*Fs*Fs*Fs*wn_1*zeta_1 + 4*Fs*Fs*K_1*Kd_1*wn_1*wn_1 + 2*Fds_1*Fs*K_1*Ki_1*wn_1*wn_1 + 4*Fds_1*Fs*Fs*K_1*Kp_1*wn_1*wn_1);
            //
            //
            //
            //
            //
            //
            b0_1_C    = (K_1*Ki_1*wn_1*wn_1 + 2*Fs*K_1*Kp_1*wn_1*wn_1 + 4*Fs*Fs*K_1*Kd_1*wn_1*wn_1 + 2*Fds_1*Fs*K_1*Ki_1*wn_1*wn_1 + 4*Fds_1*Fs*Fs*K_1*Kp_1*wn_1*wn_1)/Divnd_1_C;
            b1_1_C    = (4*K_1*Ki_1*wn_1*wn_1 + 4*Fs*K_1*Kp_1*wn_1*wn_1 + 4*Fds_1*Fs*K_1*Ki_1*wn_1*wn_1)/Divnd_1_C;
            b2_1_C    = (6*K_1*Ki_1*wn_1*wn_1 - 8*Fs*Fs*K_1*Kd_1*wn_1*wn_1 - 8*Fds_1*Fs*Fs*K_1*Kp_1*wn_1*wn_1)/Divnd_1_C;
            b3_1_C    = (4*K_1*Ki_1*wn_1*wn_1 - 4*Fs*K_1*Kp_1*wn_1*wn_1 - 4*Fds_1*Fs*K_1*Ki_1*wn_1*wn_1)/Divnd_1_C;
            b4_1_C    = (K_1*Ki_1*wn_1*wn_1 - 2*Fs*K_1*Kp_1*wn_1*wn_1 + 4*Fs*Fs*K_1*Kd_1*wn_1*wn_1 - 2*Fds_1*Fs*K_1*Ki_1*wn_1*wn_1 + 4*Fds_1*Fs*Fs*K_1*Kp_1*wn_1*wn_1)/Divnd_1_C;
            //
            //
            //
            //
            //
            a1_1_C    = (4*Fs*wn_1*wn_1 - 64*Fds_1*Fs*Fs*Fs*Fs - 16*Fs*Fs*Fs + 4*K_1*Ki_1*wn_1*wn_1 + 4*Fs*K_1*Kp_1*wn_1*wn_1 - 32*Fds_1*Fs*Fs*Fs*wn_1*zeta_1 + 4*Fds_1*Fs*K_1*Ki_1*wn_1*wn_1)/Divnd_1_C;
            a2_1_C    = (96*Fds_1*Fs*Fs*Fs*Fs - 8*Fds_1*Fs*Fs*wn_1*wn_1 + 6*K_1*Ki_1*wn_1*wn_1 - 16*Fs*Fs*wn_1*zeta_1 - 8*Fs*Fs*K_1*Kd_1*wn_1*wn_1 - 8*Fds_1*Fs*Fs*K_1*Kp_1*wn_1*wn_1)/Divnd_1_C;
            a3_1_C    = (16*Fs*Fs*Fs - 4*Fs*wn_1*wn_1 - 64*Fds_1*Fs*Fs*Fs*Fs + 4*K_1*Ki_1*wn_1*wn_1 - 4*Fs*K_1*Kp_1*wn_1*wn_1 + 32*Fds_1*Fs*Fs*Fs*wn_1*zeta_1 - 4*Fds_1*Fs*K_1*Ki_1*wn_1*wn_1)/Divnd_1_C;
            a4_1_C    = (16*Fds_1*Fs*Fs*Fs*Fs - 2*Fs*wn_1*wn_1 - 8*Fs*Fs*Fs + 4*Fds_1*Fs*Fs*wn_1*wn_1 + K_1*Ki_1*wn_1*wn_1 + 8*Fs*Fs*wn_1*zeta_1 - 2*Fs*K_1*Kp_1*wn_1*wn_1 - 16*Fds_1*Fs*Fs*Fs*wn_1*zeta_1 + 4*Fs*Fs*K_1*Kd_1*wn_1*wn_1 - 2*Fds_1*Fs*K_1*Ki_1*wn_1*wn_1 + 4*Fds_1*Fs*Fs*K_1*Kp_1*wn_1*wn_1)/Divnd_1_C;
            ///
            ///
            ///
            ///
            break;
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
        case 16:
            Divnd_2 = ( Fs * tao_2 + 1.0 );
            b0_2 = (1.0)/Divnd_2;
            b1_2 = (1.0)/Divnd_2;
            b2_2 = 0.0;
            a1_2 = (1.0-Fs*tao_2)/Divnd_2;
            a2_2 = 0.0;
            break;
        case 17:
            Divnd_2 = ( Fs * Fs + 0.0 );
            b0_2 = ( wn_2 * wn_2 )/( Divnd_2 + 0.0 );
            b1_2 = 0;
            b2_2 = 0;
            a1_2 = (2 * Fs * wn_2 * zeta_2 - 2 * Fs * Fs )/( Divnd_2 + 0.0 );
            a2_2 = ( Fs * Fs - 2 * zeta_2 * Fs * wn_2 + wn_2 * wn_2 )/( Divnd_2 + 0.0 );
            break;
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
        case 32:
            Divnd_1_C = (- 2*Fs - Ki_1 - 4*Fds_1*Fs*Fs - 4*Fs*Fs*Kd_1 - 4*Fs*Fs*tao_1 - 2*Fs*Kp_1 - 2*Fds_1*Fs*Ki_1 - 4*Fds_1*Fs*Fs*Kp_1 - 8*Fds_1*Fs*Fs*Fs*tao_1);
            b0_1_C    = (- Ki_1 - 4*Fs*Fs*Kd_1 - 2*Fs*Kp_1 - 2*Fds_1*Fs*Ki_1 - 4*Fds_1*Fs*Fs*Kp_1)/Divnd_1;
            b1_1_C    = (4*Fs*Fs*Kd_1 - 3*Ki_1 - 2*Fs*Kp_1 - 2*Fds_1*Fs*Ki_1 + 4*Fds_1*Fs*Fs*Kp_1)/Divnd_1;
            b2_1_C    = (4*Fs*Fs*Kd_1 - 3*Ki_1 + 2*Fs*Kp_1 + 2*Fds_1*Fs*Ki_1 + 4*Fds_1*Fs*Fs*Kp_1)/Divnd_1;
            b3_1_C    = (2*Fs*Kp_1 - 4*Fs*Fs*Kd_1 - Ki_1 + 2*Fds_1*Fs*Ki_1 - 4*Fds_1*Fs*Fs*Kp_1)/Divnd_1;
            ///
            a1_1_C    = (4*Fds_1*Fs*Fs - 3*Ki_1 - 2*Fs + 4*Fs*Fs*Kd_1 + 4*Fs*Fs*tao_1 - 2*Fs*Kp_1 - 2*Fds_1*Fs*Ki_1 + 4*Fds_1*Fs*Fs*Kp_1 + 24*Fds_1*Fs*Fs*Fs*tao_1)/Divnd_1;
            a2_1_C    = (2*Fs - 3*Ki_1 + 4*Fds_1*Fs*Fs + 4*Fs*Fs*Kd_1 + 4*Fs*Fs*tao_1 + 2*Fs*Kp_1 + 2*Fds_1*Fs*Ki_1 + 4*Fds_1*Fs*Fs*Kp_1 - 24*Fds_1*Fs*Fs*Fs*tao_1)/Divnd_1;
            a3_1_C    = (2*Fs - Ki_1 - 4*Fds_1*Fs*Fs - 4*Fs*Fs*Kd_1 - 4*Fs*Fs*tao_1 + 2*Fs*Kp_1 + 2*Fds_1*Fs*Ki_1 - 4*Fds_1*Fs*Fs*Kp_1 + 8*Fds_1*Fs*Fs*Fs*tao_1)/Divnd_1;
            break;
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
    }
}
